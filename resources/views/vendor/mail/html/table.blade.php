<div class="price-box">
<div class="table price-table">
{{ Illuminate\Mail\Markdown::parse($slot) }}
    <tbody>
        <tr class="price-table__title">
            <td class="classification">Car selected:</td>
            <td>Price per Day</td>
            <td>Full car price</td>
        </tr>
        <tr>
            <td id="carName">{{$reservation->name}}</td>
            <td id="carPrice">{{$reservation->carPrice}}</td>
            <td id="totalCarPrice">{{$reservation->totalCarPrice}}</td>
        </tr>
    </tbody>

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
        @if($reservation->wug!=0)
            <tr>
                <td>WUG</td>
                <td>4,00€</td>
                <td>{{$reservation->wug}}€</td>
            </tr>
        @endif

        @if($reservation->cdwPlus!=0)
            <tr>
                <td>CDW+</td>
                <td>6,00€</td>
                <td>{{$reservation->cdwPlus}}€</td>
            </tr>
        @endif

        @if($reservation->greenCard!=0)
            <tr>
                <td>GreenCard</td>
                <td>25,00€</td>
                <td>25,00€</td>
            </tr>
        @endif

        @if($reservation->addDriver!=0 )
            <tr>
                <td>Additional Driver</td>
                <td>10,00€</td>
                <td>10,00€</td>
            </tr>
        @endif

        @if($reservation->childSeat!=0)
            <tr>
                <td>Child safety seat</td>
                <td>0,00€</td>
                <td>0,00€</td>
            </tr>
        @endif

        @if($reservation->gps!=0)
            <tr>
                <td>Gps navigation</td>
                <td>5,00€</td>
                <td>{{$reservation->gps}}€</td>
            </tr>
        @endif

        @if($reservation->roofBox!=0)
            <tr>
                <td>Roof box</td>
                <td>7,00€</td>
                <td>{{$reservation->roofBox}}€</td>
            </tr>
        @endif

        @if($reservation->router!=0)
            <tr>
                <td>MIFI 4G router</td>
                <td>5,00€</td>
                <td>{{$reservation->router€}}</td>
            </tr>
        @endif
    </tbody>

    <tbody>
        <tr class="price-table__title">
            <td class="classification">Total</td>
            <td></td>
            <td>Full price</td>
        </tr>
        <tr>
            <td><strong>Total cost:</strong></td>
            <td></td>
            <td id="fullPrice">{{$reservation->totalBookingPrice}} </td>
        </tr>


</div>
</div>
