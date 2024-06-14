from flask import Flask, render_template

app = Flask(__name__)

# Router - local onde esta as paginas
@app.route('/')

#Função - o que deseja ser exibido na pagina
def index():
    return render_template('index.php')

if __name__ == '__main__':
    app.run(host="localhost",port="5588", debug=True)