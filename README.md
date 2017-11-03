# Magento Module - Form Anti Bot

Assumption is that bot is trying to register fake account by filling all form fields. Module adds additional field to customer registration form. Added field has empty value and is not visible. When form is submitted Observer class checks if field value is still empty and redirects to home page if it is not. 