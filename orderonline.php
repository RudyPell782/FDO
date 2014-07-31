<?php
include("header.php");
?>
<section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Order Online</h3>
                        <p>
                        Use the form below to enter your online order and we will call to confirm your delivery. Please do not include payment information!
                        </p>
                        
                        <form class="form-light mt-20" role="form">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="Phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Street</label>
                                <input type="text" class="form-control" id="street" placeholder="Street">
                            </div>
							<div class="form-group">
                                <label>Town</label>
                                <input type="text" class="form-control" id="town" placeholder="Town">
                            </div>
							<div class="form-group">
                                <label>State</label> <label>Connecticut</label>
                            </div>
							<div class="form-group">
                                <label>Gallons</label>
                                <input type="text" class="form-control" id="gallons" placeholder="Gallons">
                            </div>
							<div class="form-group">
                                <label>Fill Location</label>
                                <input type="text" class="form-control" id="fill-location" placeholder="fill location">
                            </div>
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control" placeholder="Write special instructions here..." style="height:100px;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-two">Send message</button>
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    
    </section>


<?php
include("footer.html");
?>