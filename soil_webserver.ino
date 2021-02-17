/*************************************************************
  Download latest Blynk library here:
    https://github.com/blynkkk/blynk-library/releases/latest

  Blynk is a platform with iOS and Android apps to control
  Arduino, Raspberry Pi and the likes over the Internet.
  You can easily build graphic interfaces for all your
  projects by simply dragging and dropping widgets.

    Downloads, docs, tutorials: http://www.blynk.cc
    Sketch generator:           http://examples.blynk.cc
    Blynk community:            http://community.blynk.cc
    Follow us:                  http://www.fb.com/blynkapp
                                http://twitter.com/blynk_app

  Blynk library is licensed under MIT license
  This example code is in public domain.

 *************************************************************
  This example runs directly on ESP8266 chip.

  Note: This requires ESP8266 support package:
    https://github.com/esp8266/Arduino

  Please be sure to select the right ESP8266 module
  in the Tools -> Board menu!

  Change WiFi ssid, pass, and Blynk auth token to run :)
  Feel free to apply it to any other example. It's simple!
 *************************************************************/

/* Comment this out to disable prints and save space */
#define BLYNK_PRINT Serial


#include <ESP8266WiFi.h>
#include <BlynkSimpleEsp8266.h>
#include<WiFiClient.h>
#include<ESP8266WebServer.h>

//char auth[] = "JyEvnHuEW5LkQrTdiHUu0mgmptCL6QQO";

int buzzer = 15; //buzzer
int led_green = 13; 
int led_red = 12; 

// Your WiFi credentials.
// Set password to "" for open networks.
char ssid[] = "Redmif";
char pass[] = "123456789";

ESP8266WebServer server(80);
String page="";
double data;

void setup(void)
{
  pinMode(A0,INPUT);
  pinMode(buzzer, OUTPUT);
pinMode(led_green, OUTPUT);
pinMode(led_red, OUTPUT);
digitalWrite(led_green, LOW);
digitalWrite(led_red, LOW);

  delay(1000);
  // Debug console
  Serial.begin(9600);
  WiFi.begin(ssid, pass);
  Serial.println("");

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connect to");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());
  server.on("/",[](){
  page="<body  style='background-image:url(http://chaitanyarai.in/seedsly.jpeg );'><center><h1><u style='color:white;'><b style='color:yellow;'>Data Send To Soil Moisture Sensor to Web Server </b></u></h1><u style='color:white;'><h2 style='color:yellow;'>Soil Moisture Data:</h2></u><h1 style='color:white;'> " + String(data)+ "</h1></center><body>";
  server.send(200,"text/html",page);
});
server.begin();
Serial.println("Web Server Started!");
}

void loop(void)
{
  float datal=analogRead(A0);
  data=100-((datal/1024)*100);
  if(data<=55){
    Serial.println (data);
  Serial.println("Soil Need's Water");
  digitalWrite(led_green, HIGH);
  digitalWrite(led_red, LOW);
  digitalWrite(buzzer, LOW);
 
  
  }
  else{
   Serial.println (data);
  Serial.println("Soil is good");
  digitalWrite(led_green, LOW);
  digitalWrite(led_red, HIGH);
  digitalWrite(buzzer, HIGH);
  
  }
  delay(5000);
  server.handleClient();
 
}
