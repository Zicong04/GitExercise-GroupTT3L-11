from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('home.html')

@app.route('/feedback', methods=['GET', 'POST'])
def feedback():
    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        feedback = request.form['feedback']
        with open('feedback.txt', 'a') as f:
            f.write(f'Name: {name}, Email: {email}, Feedback: {feedback}\n')
        return render_template('thanks.html')
    else:
        return render_template('feedback.html')

if __name__ == '__main__':
    app.run(debug=True)