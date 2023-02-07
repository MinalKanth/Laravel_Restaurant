<div class="col-lg-6">
    <div class="contact-form">
        <form action="{{ url('/reservation') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h4>Table Reservation</h4>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <fieldset>
                        <input name="name" type="text" id="name" placeholder="Your Name*"
                            required="">
                    </fieldset>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <fieldset>
                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                            placeholder="Your Email Address" required="">
                    </fieldset>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <fieldset>
                        <input name="phone" type="text" id="phone"
                            placeholder="Phone Number*" required="">
                    </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                    <fieldset>
                        <select value="guest" name="guest" id="number-guests" required>
                            <option value="" selected disabled>Number Of Guests</option>
                            <option name="1" id="1">1</option>
                            <option name="2" id="2">2</option>
                            <option name="3" id="3">3</option>
                            <option name="4" id="4">4</option>
                            <option name="5" id="5">5</option>
                            <option name="6" id="6">6</option>
                            <option name="7" id="7">7</option>
                            <option name="8" id="8">8</option>
                            <option name="9" id="9">9</option>
                            <option name="10" id="10">10</option>
                            <option name="11" id="11">11</option>
                            <option name="12" id="12">12</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <div id="filterDate2">
                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                            <input name="date" id="date" type="text" class="form-control"
                                placeholder="dd/mm/yyyy">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div id="filterDate2">
                        <div class="input-group time" >
                            <input name="time" id="time" type="time" class="form-control"
                                >
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                </div>
<br/><br/>
<br/>
                <div class="col-lg-12">
                    <fieldset>
                        <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>

                            <button type="submit" value="Save" class="main-button-icon">Make A
                                Reservation</button>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</div>
