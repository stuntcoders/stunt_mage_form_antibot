# Magento Module - Form Anti Bot

Assumption is that attacker is trying to register account by filling all registration form fields with random data (or could try to insert code). Also, attacker is bot and not person manually filling form fields.

Module adds additional input field to customer registration form. Added field has empty value and is not visible to regular visitor. When form is submitted Observer class checks if hidden field is still empty. If hidden field is not empty, it means that bot has auto filled it. Observer than redirects to home page.
