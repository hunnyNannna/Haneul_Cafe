<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
    <div class="contact-section">
        <div class="form-contant">
            <form id="ajax-contact" wire:submit.prevent="add_to_contact">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group in_name">
                            <input type="text" class="form-control" placeholder="Name" wire:model.lazy="name"
                                required="required" style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="email" class="form-control" wire:model.lazy="email" placeholder="E-mail"
                                required="required " style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="tel" class="form-control" id="phone" wire:model.lazy="phone"
                                placeholder="Phone" required="required" style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="text" class="form-control" id="subject" wire:model.lazy="subject"
                                placeholder="Subject" required="required" style="color: cyan">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group in_message">
                            <textarea class="form-control" id="message"  rows="5" placeholder="Message"
                                wire:model.lazy="message" required="required" style="color: cyan"></textarea>
                        </div>
                        <div class="actions">
                            <input type="submit" value="Send Message"  name="submit" id="submitButton" class="btn small"
                                title="Submit Your Message!">
                        </div>
                    </div>
                </div>
            </form>
            @if (session()->has('message'))
                <script>
                    alert(' {{ session('message') }}')

                </script>
            @endif
        </div>
        <div id="googleMap">
            <iframe src="https://www.google.com/maps/d/embed?mid=1GaNg6BXnTWt09_iac-plq_KxVE0&ehbc=2E312F" style="margin:25px; width:700px; height:400px; float:right;"></iframe>
        </div>
    </div>
</div>
