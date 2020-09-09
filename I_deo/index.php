<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moja stranica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container1">
    <div class="row">
        <div class="col-12 naslov">
            <h2>MOJA STRANICA</h2>
        </div>
    </div>
    <nav class="row">
        <div class="col-12 col-md-6">
            <button><a href="autor.html">MOJA BIOGRAFIJA</a></button>
        </div>
        <div class="col-12 col-md-6 datum">
            <?php
            echo Date("d.m.Y.");
            ?>
        </div>
    </nav>
    <div class="row">
        <div class="col-12 col-md-6 tabela">
            <h3>MOJA TABELA</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Second</th>
                    <th scope="col">Third</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>podatak1</td>
                    <td>podatak2</td>
                    <td>podatak3</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>podatak4</td>
                    <td>podatak5</td>
                    <td>podatak6</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>podatak7</td>
                    <td>podatak8</td>
                    <td>podatak9</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>podatak10</td>
                    <td>podatak11</td>
                    <td>podatak12</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>podatak13</td>
                    <td>podatak14</td>
                    <td>podatak15</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>podatak16</td>
                    <td>podatak17</td>
                    <td>podatak18</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>podatak19</td>
                    <td>podatak20</td>
                    <td>podatak21</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 col-md-6 lista">
            <h3>MOJA LISTA</h3>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action list-group-item-secondary">podatak1</li>
                <li class="list-group-item list-group-item-action list-group-item-secondary">podatak2</li>
                <li class="list-group-item list-group-item-action list-group-item-secondary">podatak3</li>
                <li class="list-group-item list-group-item-action list-group-item-secondary">podatak4</li>
                <li class="list-group-item list-group-item-action list-group-item-secondary">podatak5</li>
                <li class="list-group-item list-group-item-action list-group-item-secondary">podatak6</li>
                <li class="list-group-item list-group-item-action list-group-item-secondary">podatak7</li>
                <li class="list-group-item list-group-item-action list-group-item-secondary">podatak8</li>
            </ul>
        </div>
    </div>
    <div class="row moje-slike">
        <div class="col-12 naslov-slike">
            <h3>MOJE SLIKE</h3>
        </div>
    </div>
    <div class="row moje-slike">
        <div class="col-12 col-md-4 slika"><a href="https://static.toiimg.com/thumb/72975551.cms?width=680&height=512&imgsize=881753"><img src="slike/1.jpg" width="100%" height="auto"></a></div>
        <div class="col-12 col-md-4 slika"><a href="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823__340.jpg"><img src="slike/2.jpg" width="100%" height="auto"></a></div>
        <div class="col-12 col-md-4 slika"><a href="https://bd.gaadicdn.com/processedimages/tvs/tvs-xl100/source/tvs-xl1005e8d6902ae30c.jpg?tr=w-360"><img src="slike/3.jpg" width="100%" height="auto"></a></div>
    </div>
    <div class="row moje-slike">
        <div class="col-12 moje-slike-bt"><button><a href="mojeSlike.html">PRIKAŽI VIŠE</a></button></div>
    </div>
    <footer class="row">
        <div class="col-12"><h4>footer</h4></div>
    </footer>
</div>
</body>
</html>