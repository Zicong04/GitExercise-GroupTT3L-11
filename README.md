from flask import Flask

app = Flask(Feedback)

@app.route('/')
def blank_page():
    return """
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Page</title>
    </head>
    <body>

    </body>
    </html>
    """

if __name__ == '__main__':
    app.run(debug=True)
