from flask import Flask, render_template

app = Flask(__name__)

# Router - local onde esta as paginas
@app.route('/')
@app.route('/db.php')
@app.route('/cadastro.php')
@app.route('/envia.php')

#Função - o que deseja ser exibido na pagina
def index():
    return render_template('index.php')

if __name__ == '__main__':
    app.run(debug=True)