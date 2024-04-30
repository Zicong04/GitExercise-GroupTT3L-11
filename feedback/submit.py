from flask import Flask, render_template, request
from flask_sqlalchemy import SQLAlchemy
from flask_admin import Admin
from flask_admin.contrib.sqla import ModelView

app = Flask(__name__, static_url_path='/static')
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///feedback.db'
app.config['SECRET_KEY'] = 'your_secret_key'
db = SQLAlchemy(app)

# Define your SQLAlchemy model
class Feedback(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(100))
    email = db.Column(db.String(100))
    feedback = db.Column(db.Text)

# Create Flask-Admin instances
admin = Admin(app, name='Feedback Admin', template_mode='bootstrap3')
admin.add_view(ModelView(Feedback, db.session))

@app.route('/')
def home():
    return render_template('feedback.html')

@app.route('/submit', methods=['GET', 'POST'])
def feedback():
    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        feedback_text = request.form['feedback']
        feedback_entry = Feedback(name=name, email=email, feedback=feedback_text)
        db.session.add(feedback_entry)
        db.session.commit()
        return render_template('submit.html', name = name)
    else:
        return render_template('feedback.html')

if __name__ == '__main__':
    with app.app_context():
        db.create_all()

    app.run(debug=True)