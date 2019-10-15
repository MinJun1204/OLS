import serial
import pymysql

port = "/dev/ttyACM0"
serialFromArduino = serial.Serial(port, 9600)
serialFromArduino.flushInput()

# MySQL Connection 연결
server = 'remotemysql.com'
username = '0BT3dM4yI7'
password = 'ftCCNct3x1'
db = '0BT3dM4yI7'

conn = pymysql.connect(host=server, user=username, password=password,
                       db=db, charset='utf8')
 
# Connection 으로부터 Cursor 생성
curs = conn.cursor()

while True:
    if(serialFromArduino.inWaiting() > 0):
        i = serialFromArduino.read(1)
        if (i.decode()) == '1':
            value = 1
            print('ON')
        else:
            value = 0
            print('OFF')
        sql = "UPDATE laptop SET available = %s WHERE id = 1"
            
      #  print(int(ord(i)))

        curs.execute(sql, value)
        conn.commit()

    # Connection 닫기
    # conn.close()
