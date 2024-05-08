from flask import Flask, request, render_template
import sqlite3

app = Flask(__name__)

conn = sqlite3.connect('database.db')
c = conn.cursor()

c.execute('''CREATE TABLE IF NOT EXISTS users
             (email TEXT, password TEXT)''')

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/submit_form', methods=['POST'])
def submit_form():
    email = request.form['email']
    password = request.form['psw']

    c.execute("INSERT INTO users (email, password) VALUES (?, ?)", (email, password))
    conn.commit()
    return "Form submitted successfully!"

if __name__ == '__main__':
    app.run(debug=True)
