    <div class="form-container">
        <form method='POST' action="<?= base_url() ?>signup/validate" class="form">
            
            <?php if($m = $this->session->flashdata('failed')): ?>
                <br>
                <div style='color:white; background:salmon; padding:10px 15px; box-sizing:border-box; border-radius: 5px'>
                    <?= $m?>
                </div>
                <br>
            <?php endif;?>

            <p class="text-medium text-montserrat">SIGN UP NOW</p>
            <br>
            <div class="columns">
                <div class="field column">
                    <label class='label'>First Name</label>
                    <input value="<?= $this->session->flashdata('first_name') ? $this->session->flashdata('first_name') : ''?>" id='first_name' name='first_name' type="name" class="input" required>
                </div>
                <div class="field column">
                    <label class='label'>Last Name</label>
                    <input value="<?= $this->session->flashdata('last_name') ? $this->session->flashdata('last_name') : ''?>" id='last_name' name='last_name' type="name" class="input" required>
                </div>
            </div>
            <div class="columns">
                <div class="field column">
                    <label class='label'>Email Address</label>
                    <input value="<?= $this->session->flashdata('email') ? $this->session->flashdata('email') : ''?>" id='email' name='email' type="email" class="input" required>
                </div>
                <div class="field column">
                    <label class='label'>Phone Number</label>
                    <input value="<?= $this->session->flashdata('number') ? $this->session->flashdata('number') : ''?>" id='number' name='number' type="number" class="input" required>
                </div>
            </div>
            <div class="field">
                <label class='label'>Company Name</label>
                <input value="<?= $this->session->flashdata('company_name') ? $this->session->flashdata('company_name') : ''?>" id='company_name' name='company_name' type="text" class="input" required>
            </div>
            <div class="field">
                <label class='label'>Billing Address</label>
                <input value="<?= $this->session->flashdata('billing_address') ? $this->session->flashdata('billing_address') : ''?>" id='billing_address' name='billing_address' type="text" class="input" required>
            </div>
            <div class="columns">
                <div class="field column">
                    <label class='label'>City</label>
                    <input value="<?= $this->session->flashdata('city') ? $this->session->flashdata('city') : ''?>" id='city' name='city' type="text" class="input" required>
                </div>
                <div class="field column">
                    <label class='label'>State</label>
                    <input value="<?= $this->session->flashdata('state') ? $this->session->flashdata('state') : ''?>" id='state' name='state' type="text" class="input" required>
                </div>
                <div class="field column">
                    <label class='label'>Zip Code</label>
                    <input value="<?= $this->session->flashdata('zipcode') ? $this->session->flashdata('zipcode') : ''?>" id='zipcode' name='zipcode' type="text" class="input" required>
                </div>
            </div>
            <hr>
            <p class='text-mednorm text-montserrat text-bold text-center'>Onboarding Survey</p>
            <br>
            <p class="text-small text-grey text-center text-montserrat">This helps us to identify your dream clients and<br> craft the best messaging to increase your response rate.</p>
            <hr>

            <!-- Onboarding Survey -->

            <div class="field column">
                <label class='label'>Rank the top 3 Locations you're targeting</label>
                <textarea placeholder='Example: 1. Utah, 2. Florida, 3. Houston' name="top_3_locations" rows="5" class="textarea"><?= $this->session->flashdata('top_3_locations') ? $this->session->flashdata('top_3_locations') : ''?></textarea>
            </div>


            <div class="field column">
                <label class="label">Target Industries (Choose as many as you like)</label>
                <button type='button' onclick='showIndustriesModal()' class="button is-info">Click Here to Choose</button>
            </div>


            <div class="field column">
                <div style='z-index:999999999999999' id='industries_modal' class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title">Industries List</p>
                            <button type='button' onclick='closeIndustriesModal()' class="delete" aria-label="close"></button>
                        </header>
                        <section class="modal-card-body">

                            <div class="columns">


                                <!-- First part of modal -->
                                <div class="column">
                                    <?php $this->load->view('components/first_part_industries')?>
                                </div>

                                <!-- Second side of modal -->
                                <div class="column">
                                    <?php $this->load->view('components/second_part_industries')?>
                                </div>

                                <!-- Third part of modal -->
                                <div class="column">
                                    <?php $this->load->view('components/third_part_industries')?>
                                </div>
                            </div>
                            

                        </section>
                        <footer class="modal-card-foot">
                            <button type='button' onclick='closeIndustriesModal()' class="button is-fullwidth is-info">Done</button>
                        </footer>
                    </div>
                </div>
            </div>

            <div class="field column">
                <label class="label">The Titles / Profession You're Targeting</label>
                <textarea placeholder="Example: VP of Digital Marketing, Head of Engineering, IT Director" name="target_titles" rows="5" class="textarea"><?= $this->session->flashdata('target_titles') ? $this->session->flashdata('target_titles') : ''?></textarea>
            </div>

            <div class="field column">
                <label class="label">Give a brief summary of what your company provides, and the problem that it solves for your clients</label>
                <textarea name="summary" rows="5" class="textarea"><?= $this->session->flashdata('summary') ? $this->session->flashdata('summary') : ''?></textarea>
            </div>

            <div class="field column">
                <label class="label">Do you have any industry facts or data that we could use to strengthen your outreach messages?</label>
                <textarea placeholder="Example: 88% of employees say paid time off is important." name="industry_facts" rows="5" class="textarea"><?= $this->session->flashdata('industry_facts') ? $this->session->flashdata('industry_facts') : ''?></textarea>
            </div>


            <br>
            <button class="btn btn-blue btn-wide">SIGNUP</button>
            <div class="images-container">

                <img src="https://myprospectengine.com/images/seal.secure.png" alt="">
                <img src="https://myprospectengine.com/images/PayPal_logo.svg_.png" alt="">
                <img src="https://myprospectengine.com/images/credit-cards.png" alt="">

            </div>
        </form>

        <div class='text-container'>

            <img src="http://leadengine.live/home/assets/images/wide_logo.png">
            <br><br>
            <p style='margin:10px 0' class="text-montserrat text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> No Setup Fees</p>
            <p style='margin:10px 0' class="text-montserrat text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> No Cancellation Fees</p>
            <p style='margin:10px 0' class="text-montserrat text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> Cancel Any Time</p>
            <p style='margin:10px 0' class="text-montserrat text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> Secure Paypal Checkout</p>
            <p style='margin:10px 0' class="text-montserrat text-mednorm text-grey"><i class="fas fa-check-circle text-green"></i> 30-Day Money-Back Guarantee</p>


        </div>
    </div>


    <script>

        function showIndustriesModal(){
            $('#industries_modal').addClass('is-active');
            $('body').addClass('stop-scrolling');
            $('html').addClass('stop-scrolling');
        }
        function closeIndustriesModal(){
            $('#industries_modal').removeClass('is-active');
            $('body').removeClass('stop-scrolling');
            $('html').removeClass('stop-scrolling');
        }

    </script>