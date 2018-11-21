<div class="remodal" data-remodal-id="modal">
    <a data-remodal-action="close" class="remodal-close"></a>
    <!-- // order-details-form  -->
    <form class="order-details-form" id="bookingForm" name="bookingform" method="post" >
        @csrf
        <div class="inner-form">
            <h3>Order Form</h3>
            <div class="clearfix">
                <div id="successBooking">
                    <p>Your message was sent successfully!</p>
                </div>
                <div id="errorBooking">
                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                </div>
            </div>
            <div class="inner-form__elements">
                <div class="inner-half">
                    <h5>New Reservation</h5>
                    <div class="location" style="margin-bottom: 8px">
                        <select class="tt-form-control tt-select-large" name="location1">
                            <option selected="" value="Location">Airport or anywhere in Montengero</option>
                            <option value="Washington">Washington</option>
                            <option value="New York">New York</option>
                            <option value="Boston">Boston</option>
                            <option value="Florida">Florida</option>
                        </select>
                    </div>

                    <div class="text-element checkbox-div">
                        <div class="wishes">
                            <div class="box-checkbox">
                                <input type="checkbox" name="pickupLocation" id="checkbox-03" value="no">
                                <label for="checkbox-03">I would like to return car at pickup location</label>
                            </div>
                        </div>
                    </div>

                    <div class="location" style="margin-bottom: 8px">
                        <select class="tt-form-control tt-select-large" name="location2">
                            <option selected="" value="Airport or anywhere in Montengero">Airport or anywhere in Montengero</option>
                            <option value="Washington">Washington</option>
                            <option value="New York">New York</option>
                            <option value="Boston">Boston</option>
                            <option value="Florida">Florida</option>
                        </select>
                    </div>

                    <div class="inner-half__width">
                        <div class="input-date datetimepicker-wrap">
                            <input type="text" name="date" id="datetimepicker1" class="datetimepicker" placeholder="Pick-up date">
                            <i class="icon-calendar-with-a-clock-time-tools"></i>
                        </div>
                        <div class="input-time">
                            <input type="text" name="time" id="timepicker1" class="timepicker" placeholder="Pick-up time">
                            <i class="icon-clock"></i>
                        </div>
                    </div>
                    <div class="inner-half__width">
                        <div class="input-date datetimepicker-wrap">
                            <input type="text" name="date1" class="datetimepicker" placeholder="Drop-off date">
                            <i class="icon-calendar-with-a-clock-time-tools"></i>
                        </div>
                        <div class="input-time">
                            <input type="text" name="time1" class="timepicker" placeholder="Drop-off time">
                            <i class="icon-clock"></i>
                        </div>
                    </div>

                    <div class="location-drop-off">
                        <input type="text" name="flightNumber" placeholder="Enter your flight number (Optional)">
                        <i class="icon-placeholder-for-map"></i>
                    </div>

                    <div class="passengers-luggage">
                    </div>
                </div>
                <div class="inner-half">
                    <h5>Passenger's Contact Info</h5>
                    <div class="inner-half__width">
                        <div class="first-name">
                            <input type="text" name="firstname" placeholder="First Name*">
                        </div>
                        <div class="last-name">
                            <input type="text" name="lastname" placeholder="Last Name*">
                        </div>
                    </div>

                    <div class="inner-half__width">
                        <div class="your-phone">
                            <input type="tel" name="phone" placeholder="Your phone">
                        </div>
                        <div class="email">
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="specialreguests">
                        <textarea name="specialreguests" placeholder="Special Requests"></textarea>
                        <span class="textarea-text">(Maximum characters: 250)</span>
                    </div>
                </div>
            </div>
            <input type="hidden" name caid="carInput">
            <button type="submit" class="btn">CONTINUE</button>
        </div>
    </form>
    <!-- // order-details-form  -->
</div>