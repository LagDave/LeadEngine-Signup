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