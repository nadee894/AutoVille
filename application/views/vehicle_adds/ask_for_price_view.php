<div class="scroll-block fx" data-scroll-object="1070" style="top: 0px;">
    <div class="top-label">
        <h4>
            <i class="icon-chat-empty"></i>
            Ask about this car
        </h4>
    </div>
    <div class="column seller-phone" data-layer-category="seller-phone">
        <div class="hidden" style="display: block;">
            <h4 class="seller-label"> Call the seller </h4>
            <div class="contact-number">
                <span class="phone-type">Mobile</span>
                <span class="phone-number">+94777888299</span>
            </div>
            <div class="contact-number">
                <span class="phone-type">Office</span>
                <span class="phone-number">+94112811452</span>
            </div>
        </div>
    </div>
    <div class="column contact-form">
        <form id="lead-form" class="lead-form" data-layer-category="contact-form" data-ajax-form-method="POST" data-ajax-url="/listings/sendleadnotification/" data-abide="ajax" novalidate="novalidate">
            <div class="field-row">
                <label class="field iconified">
                    <i class="icon-user"></i>
                    <input id="ContactAgentForm_name" type="text" placeholder="Your name" name="ContactAgentForm[name]">
                </label>
            </div>
            <input id="token" type="hidden" value="5addc19ff9d5adc76d222fcec4a2b73b9590023c" name="YII_CSRF_TOKEN">
            <div class="field-row">
                <label class="field iconified">
                    <i class="icon-mail-alt"></i>
                    <input id="ContactAgentForm_sender_email" type="text" placeholder="Email" name="ContactAgentForm[senderemail]">
                </label>
            </div>
            <div class="field-row">
                <label class="field iconified">
                    <i class="icon-phone"></i>
                    <input id="ContactAgentForm_sender_phone" type="phone" placeholder="Phone" name="ContactAgentForm[senderphone]">
                </label>
            </div>
            <div class="field-row">
                <label class="field iconified">
                    <i class="icon-pencil"></i>
                    <textarea id="ContactAgentForm_comment" name="ContactAgentForm[comment]">Hello, I found your listing on Carmudi. Please, send me more information about Perodua Elite Viva 2012. Thank you</textarea>
                </label>
            </div>
            <div class="fixed-section">
                <div class="field checkbox collapse ticked">
                    <i class="cb-box icon-check"></i>
                    <div class="cb-label" data-layer-action="save"> Save as an alert </div>
                    <input id="ContactAgentForm_saveasalert" type="hidden" name="ContactAgentForm[save_as_alert]" value="1">
                </div>
                <div class="field checkbox collapse ticked">
                    <i class="cb-box icon-check"></i>
                    <div class="cb-label" data-layer-action="subscribe"> Subscribe to our newsletter </div>
                    <input id="ContactAgentForm_acceptemailoffers" type="hidden" name="ContactAgentForm[accept_email_offers]" value="1">
                </div>
                <input type="hidden" value="SU092CA68QPZINTCARLK" name="sku">
                <div data-ajax-local-messages=""></div>
                <div class="confirm-btn">
                    <button id="lead-form-submit" class="lead-form-submit primary expand radius no-shadow" data-layer-label="SU092CA68QPZINTCARLK" data-layer-action="contact-seller"> Contact Seller </button>
                </div>
            </div>
        </form>
    </div>
</div>

