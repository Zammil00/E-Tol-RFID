#include <WiFi.h>
#include <HTTPClient.h>
#include <SPI.h>
#include <MFRC522.h>
#include <Servo.h>

#define SS_PIN 21
#define RST_PIN 22
MFRC522 rfid(SS_PIN, RST_PIN);
Servo servo;

const char* ssid = "WIFI_SSID";
const char* password = "WIFI_PASS";
String serverUrl = "http://server-anda.com/api/tap";

void setup() {
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  SPI.begin();
  rfid.PCD_Init();
  servo.attach(18);
  servo.write(0); // posisi tertutup
}

void loop() {
  if (!rfid.PICC_IsNewCardPresent() || !rfid.PICC_ReadCardSerial()) return;

  String uid = "";
  for (byte i = 0; i < rfid.uid.size; i++) {
    uid += String(rfid.uid.uidByte[i], HEX);
  }
  uid.toUpperCase();
  Serial.println("UID: " + uid);

  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    http.begin(serverUrl);
    http.addHeader("Content-Type", "application/json");
    String body = "{\"uid\":\"" + uid + "\"}";
    int httpResponseCode = http.POST(body);

    if (httpResponseCode == 200) {
      String response = http.getString();
      Serial.println(response);
      if (response.indexOf("success") > 0) {
        servo.write(90); // buka palang
        delay(3000);
        servo.write(0); // tutup lagi
      }
    }
    http.end();
  }
}
