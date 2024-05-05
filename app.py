from flask import Flask, render_template, request 
from flask_sqlalchemy import SQLAlchemy


app = Flask(__name__)
app.config['SQLALCHEMY_DATABASES_URI']='sqlite:///tmp/databases.db'
db=

@app.route('/')
def index():
     return render_template('form.html')

@app.route('/processor', methods=['POST'])
def processor():
     fname = request.form['fname']
     email = request.form['email']
     password = request.form['password']
     return fname +" "+email+" "+password


if __name__ == '__main__':
    app.run(debug=True)