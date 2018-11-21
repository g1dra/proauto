<html>
<head>
    <link href="/css/plugins/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main-style.css" rel="stylesheet">
    <link href="/iconfont/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
<div class="col-xs-12">
    <div class="price-box">
<table class="price-table" id="extrasTable">
    <tbody>
    <tr class="price-table__title">
        <td class="classification">Car selected:</td>
        <td>Price per Day</td>
        <td>Full car price</td>
    </tr>
    <tr>
        <td id="carName">{{$reservation->name}}</td>
        <td id="carPrice">{{$reservation->name}}</td>
        <td id="totalCarPrice">{{$reservation->name}}</td>
    </tr>
 {{--
    <tbody>
    <tr class="price-table__title">
        <td class="classification">Extras</td>
        <td>Price per Day</td>
        <td>Full price</td>
    </tr>
    <tr>
        <td id="extrasName">CDW/TP</td>
        <td id="extrasPrice">0,00€ </td>
        <td id="totalPrice">0,00€</td>
    </tr>
    <tr>
        <td>PAI</td>
        <td>0,00€</td>
        <td>0,00€</td>
    </tr>
    ${reservationObj.wug ? `
    <tr>
        <td>WUG</td>
        <td>7,00€</td>
        <td>${days * 7}€</td>
    </tr>` : ``}
    ${reservationObj.cdwPlus ? `
    <tr>
        <td>CDW+</td>
        <td>5,00€</td>
        <td>${days * 5}€</td>
    </tr>
    ` : ``}
    ${reservationObj.greenCard ? `
    <tr>
        <td>CDW+</td>
        <td>25,00€</td>
        <td>25,00</td>
    </tr>
    ` : ``}
    ${reservationObj.addDriver ? `
    <tr>
        <td>Additional Driver</td>
        <td>10,00€</td>
        <td>10,00€</td>
    </tr>
    ` : ``}
    ${reservationObj.childSeat ? `
    <tr>
        <td>Child safety seat</td>
        <td>0,00€</td>
        <td>0,00€</td>
    </tr>
    ` : ``}
    ${reservationObj.gps ? `
    <tr>
        <td>Gps navigation</td>
        <td>5,00€</td>
        <td>${days * 5}€</td>
    </tr>
    ` : ``}
    ${reservationObj.roofBox ? `
    <tr>
        <td>Roof box</td>
        <td>7,00€</td>
        <td>${days * 7}€</td>
    </tr>
    ` : ``}
    ${reservationObj.router ? `
    <tr>
        <td>MIFI 4G router</td>
        <td>5,00€</td>
        <td>${days * 5}€</td>
    </tr>
    ` : ``}
    </tbody>
    <br>
    <br>
    <tbody>
    <tr class="price-table__title">
        <td class="classification">Total</td>
        <td></td>
        <td>Full price</td>
    </tr>
    <tr>
        <td><strong>Total cost:</strong></td>
        <td></td>
        <td id="fullPrice"></td>
    </tr>
    </tbody>--}}
</table>
    </div>
    </div>
</body>
</html>