int echoPin = 12;
int trigPin = 13;

void setup(){
  Serial.begin(9600);
  
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
}

void loop(){
  digitalWrite(trigPin, LOW);
  digitalWrite(echoPin, LOW);
  delayMicroseconds(2);
  
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  
  unsigned long duration = pulseIn(echoPin, HIGH);
  float distance = ((float)(340 * duration) / 10000);
  int d = (int)distance;
  
  if (d < 10) {
    Serial.print(1);
  } else {
    Serial.print(0);
  }
  
  delay(3000);
}
