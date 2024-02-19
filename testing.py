from flask import Flask, request

app = Flask(__name__)


@app.route('/', methods=['GET'])
def result():
    return '''
        <h1>5 Facts About ME </h1>
        <h3>I will provide 3 facts, please put the other 2 to complete the list :) </h3>
           <form method="GET" action="/p1">
            <table>
                <tr>
                    <td>Fact I know 1:</td> 
                    <td><input type="text" name="f1" value=""></td>
                </tr>

                <tr>
                    <td>Fact I know 2:</td> 
                    <td><input type="text" name="f2" value=""></td>
                </tr>
            </table>
                <br>
                <br>
                <hr>
                <br>
               <input type="submit" value="List Reveal">
           </form>'''

@app.route('/p1', methods=['GET'])
def result():
    return '''
        <h1>5 Facts About ME </h1>
        <h3>I will provide 3 facts, please put the other 2 to complete the list :) </h3>
           <form method="GET" action="/result">
            <table>
                <tr>
                    <td>Fact I know 1:</td> 
                    <td><input type="text" name="f3" value=""></td>
                </tr>

                <tr>
                    <td>Fact I know 2:</td> 
                    <td><input type="text" name="f4" value=""></td>
                </tr>
            </table>
                <br>
                <br>
                <hr>
                <br>
               <input type="submit" value="List Reveal">
           </form>'''

@app.route('/result', methods=['GET'])
def form():
    f1 = request.args['f1']
    f2 = request.args['f2']
     f3 = request.args['f3']
    f4 = request.args['f4']

    return '''
        <h1 align="center">5 FACTS ABOUT ME </h1>
        <br>
        <br>
        <br>
        <table align="center">
            <tr>
                <td bgcolor="khaki"><h1>Fact 1:</h1></td> 
                <td bgcolor="khaki"><h1>I am cute</h1></td>
            </tr>

            <tr>
                <td bgcolor="khaki"><h1>Fact 2:</h1></td> 
                <td bgcolor="khaki"><h1>I like Anime</h1></td>
            </tr>

            <tr>
                <td bgcolor="khaki"><h1>Fact 3:</h1></td> 
                <td bgcolor="khaki"><h1>I love TWICE</h1></td>
            </tr>

            <tr>
                <td bgcolor="olive"><h1>Fact 4:</h1></td> 
                <td bgcolor="sky blue"><h1>{0}</h1></td>
            </tr>

            <tr>
                <td bgcolor="olive"><h1>Fact 5:</h1></td> 
                <td bgcolor="sky blue"><h1>{1}</h1></td>
            </tr>
        </table>
    '''.format(f1,f2)

app.run(port=5003, debug=True)
