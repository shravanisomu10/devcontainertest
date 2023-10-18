import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="Cybe$c0m888",
  database="myguests"
)

mycursor = mydb.cursor()

mycursor.execute("CREATE TABLE customers (first name VARCHAR(255), last name VARCHAR(255),email VARCHAR(255))")