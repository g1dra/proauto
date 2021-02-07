
<div class='col-sm-12'> 
    <div class='text-block'>
        <p>
             <span class='text-link'>
                Booking info
            </span>
        </p>
        <ul class='list__marker'>
            <li>
                 Staring location: {{$reservation->location1}}
                </li>
            <li>
                Drop-Off location: {{$reservation->location2}}
                </li>
            <li>
                 Pick up time: {{$reservation->date}} {{$reservation->time}}
                </li>
            <li>
                Drop-Off time: {{$reservation->date1}} {{$reservation->time1}}
                </li>
            <li>
                 Passenger's name: {{$reservation->firstname}}
                </li>
            <li>
                Passenger's last name: {{$reservation->lastname}}
            </li>
            <li>
                 Passenger's email: {{$reservation->email}}
            </li>
            @isset  ($reservation->flightNumber)
            <li>
                 Flight number: {{$reservation->flightNumber}}
            </li>
            @endisset

            @isset ($reservation->phone)
            <li>
                 Phone number: {{$reservation->phone}}
            </li>
            @endisset

            @isset ($reservation->specialreguests)
            <li>
                 Special request: {{$reservation->specialreguests}}
            </li>
            @endisset

            @isset($reservation->pickupLocation)
            <li>
                 Return car to same location.
            </li>
            @endisset
            </ul>
        </div>
    </div>