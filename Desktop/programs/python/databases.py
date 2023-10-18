import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="Cybe$c0m888"
)

mycursor = mydb.cursor()

mycursor.execute("CREATE DATABASE mydatabases")