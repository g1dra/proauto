@extends('layouts.master')
@section('page-content')
    <div id="faqAccordion">
        <main>
            <details>
                <summary role="button" tabindex="0">
                    Can I change my reservation?
                </summary>
                <div>
                    <p>You can change your reservation the latest 48 hours before your rental starts. To do so, please
                        email us at the address given in
                        the reservation confirmation or simply give us a call.
                    </p>
                </div>
            </details>
            <details>
                <summary role="button" tabindex="0">
                    Can I cancel my reservation?
                </summary>
                <div>
                    <p>You can cancel your reservation the latest 48 hours before your rental starts. If you wish to
                        cancel your reservation less than 48 hours before your rental starts you will be obliged to pay
                        the first day of the rental.</p>
                </div>
            </details>
            <details>
                <summary role="button" tabindex="0">
                    Are there any additional costs in case I return the vehicle late?
                </summary>
                <div>
                    <p>One rental day is based on 24 consecutive hours. If you return your car after the agreed deadline
                        you will be obliged to pay for the additional day.
                    </p>
                </div>
            </details>
            <details>
                <summary role="button" tabindex="0">
                    Can I drive outside of Montenegro boarders?
                </summary>
                <div>
                    <p>You can use the vehicle outside Montenegro only in agreement with ProAuto Rent-a-Car. Extra fee
                        is charged.</p>
                </div>
            </details>

            <details>
                <summary role="button" tabindex="0">
                    Can I pick up the vehicle at Tivat or Podgorica airport?
                </summary>
                <div>
                    <p>Yes. Please indicate which airport and your flight number in your reservation and we will be
                        there to wait for you.</p>
                </div>
            </details>

            <details>
                <summary role="button" tabindex="0">
                    What if my flight is delayed?
                </summary>
                <div>
                    <p>ProAuto Rent-a-Car guarantees that we will be at our airport stand even if the flight is delayed
                        if you have provided us with the right flight number.</p>
                </div>
            </details>

            <details>
                <summary role="button" tabindex="0">
                    Can I pick up the vehicle in one of your offices and drop it off in another one?
                </summary>
                <div>
                    <p>Yes, that service is free of charge.</p>
                </div>
            </details>

            <details>
                <summary role="button" tabindex="0">
                    Can more than one person drive the car?
                </summary>
                <div>
                    <p>Yes. However, please make sure to indicate the name of the other person when you pick up the car.
                        This is important because of the insurance and in case police stops you. Extra fee is
                        charged.</p>
                </div>
            </details>

            <details>
                <summary role="button" tabindex="0">
                    What happens if I have a car accident?
                </summary>
                <div>
                    <p>Please stay calm and immediately dial traffic police at 122. Make sure to request a report on the
                        investigation of the accident from the authorities that you will need for the insurance. Please
                        inform us as soon as possible about your health condition, possible damages of the car and
                        detailed description of how and where the accident occurred so that we can send help
                        immediately. If you are not responsible for the accident you will not handle any costs and we
                        will provide you with another vehicle at our shortest convenience.</p>
                </div>
            </details>

            <details>
                <summary role="button" tabindex="0">
                    When do I need to pay for my rental?
                </summary>
                <div>
                    <p>You pay for your rental during the pick up and contract signing unless you booked your vehicle at a special offer.</p>
                </div>
            </details>

            <details>
                <summary role="button" tabindex="0">
                    Can I pick up the vehicle at Dubrovnik airport (Croatia)?
                </summary>
                <div>
                    <p>No, this service is not available anymore.</p>
                </div>
            </details>

            <details>
                <summary role="button" tabindex="0">
                    Can I drop off the vehicle at Dubrovnik airport?
                </summary>
                <div>
                    <p>Yes, if you inform us prior to your drop off and at additional cost.</p>
                </div>
            </details>

        </main>
    </div>
    <style>
        @keyframes expand {
            0% {
                opacity: 0;
                max-height: 0;
            }
            100% {
                opacity: 1;
                max-height: 30em;
            }
        }

        html {
            overflow-y: scroll;
        }

        body {
            /*position: relative;*/
            /*background: #f0f4f9;*/
            /*line-height: 1.6;*/
            /*font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;*/
        }

        main {
            display: block;
            /* IE */
            width: 70%;
            max-width: 50em;
            margin: 3em auto;
        }

        p {
            margin: 0;
        }

        p + p {
            margin-top: 1.5em;
        }

        a {
            color: #1e90ff;
        }

        details > div {
            position: relative;
            z-index: 20;
            padding: 1.25em 1.5em;
            margin-bottom: .6em;
            border-radius: 0.3em;
            box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);
            background-color: white;
        }

        summary {
            position: relative;
            z-index: 10;
            display: block;
            background: white;
            padding-left: 3em;
            margin-bottom: .5em;
            font-size: 1.2em;
            line-height: 3;
            box-sizing: border-box;
            list-style: none;
            cursor: pointer;
            border-radius: 0.3em;
            box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);
        }

        summary:hover,
        summary:focus {
            background: #1e90ff;
            color: white;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.5);
            outline: 0;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        summary::before {
            content: '+';
            position: absolute;
            top: 50%;
            left: 1em;
            transform: translateY(-50%);
            width: 1em;
            height: 1em;
            margin-right: 1em;
            background: #ff5321;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 20px;
            line-height: 1;
            text-align: center;
            border-radius: 50%;
        }

        details[open] summary::before {
            content: '-';
            line-height: .9;
        }

        details[open] summary:hover::before,
        details[open] summary:focus::before {
            background: white;
            color: #1e90ff;
        }

    </style>
@endsection