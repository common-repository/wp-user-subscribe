=== WP User Subscribe ===
Contributors: Mirza Alamin
Tags: wp user subscribe, subscribe, user, follower, userlist, visitor list, feedback, email, ajax, captcha, akismet, multilingual
Tested up to: 5.1.1
Stable tag: 1.2

Just another Subscribe plugin. Simple but flexible.

== Description ==

WP User Subscribe is a very easy to use, Just you have to install and activate it. No need to confugure anything.
You can collect all the users email address who have subscribe in your website

= WP User Subscribe Needs Your Support =

It is hard to continue development and support for this free plugin without contributions from users like you. If you enjoy using WP User Subscribe and find it useful, please consider Your donation will help encourage and support the plugin's continued development and better user support.

= Privacy Notices =

With the default configuration, this plugin, in itself, does not:

* track users by stealth;
* write any user personal data to the database;
* send any data to external servers;
* use cookies.



* reCAPTCHA ([Google](https://policies.google.com/?hl=en))
* Akismet ([Automattic](https://automattic.com/privacy/))
* Constant Contact ([Endurance International Group](https://www.endurance.com/privacy))

== Installation ==

1. Upload the entire `wp-user-subscribe` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. No need to do any configuration, just Activate the plugin and all will be done.


== Frequently Asked Questions ==

Do you have questions or issues with WP User Subscribe? Use these support channels appropriately.

1. [Docs](https://wpusersubscribe.org/docs/)
1. [FAQ](https://wpusersubscribe.org/faq/)
1. [Support Forum](https://wpusersubscribe.org/support/plugin/wp-user-subscribe/)

[Support](https://wpusersubscribe.org/support/)

== Screenshots ==

1. screenshot-1.png

== Changelog ==

For more information, see [Releases](https://wpusersubscribe.org/category/releases/).


* reCAPTCHA: Modifies the reaction to empty response tokens.

= 5.1 =

* Introduces the Constant Contact integration module.
* Updates the reCAPTCHA module to support reCAPTCHA v3.
* Adds Dark Mode style rules.

= 5.0.5 =

* Fixes the inconsistency problem between get_data_option() and get_default_option() in the WPCF7_FormTag class.
* Suppresses PHP errors occur on unlink() calls.
* Introduces wpcf7_is_file_path_in_content_dir() to support the use of the UPLOADS constant.

= 5.0.4 =

* Specifies the capability_type argument explicitly in the register_post_type() call to fix the privilege escalation vulnerability issue.
* Local File Attachment – disallows the specifying of absolute file paths referring to files outside the wp-content directory.
* Config Validator – adds a test item to detect invalid file attachment settings.
* Fixes a bug in the JavaScript fallback function for legacy browsers that do not support the HTML5 placeholder attribute.
* Acceptance Checkbox – unsets the form-tag's do-not-store feature.

= 5.0.3 =

* CSS: Applies the "not-allowed" cursor style to submit buttons in the "disabled" state.
* Acceptance Checkbox: Revises the tag-generator UI to encourage the use of better options in terms of personal data protection.
* Introduces wpcf7_anonymize_ip_addr() function.
* Introduces the consent_for:storage option for all types of form-tags.

= 5.0.2 =

* Added the Privacy Notices section to the readme.txt file.
* Updated the Information meta-box content.
* Use get_user_locale() instead of get_locale() where it is more appropriate.
* Acceptance Checkbox: Reset submit buttons’ disabled status after a successful submission.

= 5.0.1 =

* Fixed incorrect uses of _n().
* Config validation: Fixed incorrect count of alerts in the Additional Settings tab panel.
* Config validation: Fixed improper treatment for the [_site_admin_email] special mail-tag in the From mail header field.
* Acceptance checkbox: The class and id attributes specified were applied to the wrong HTML element.
* Config validation: When there is an additional mail header for mailboxes like Cc or Reply-To, but it has a possible empty value, “Invalid mailbox syntax is used” error will be returned.
* Explicitly specify the fourth parameter of add_action() to avoid passing unintended parameter values.
* Check if the target directory is empty before removing the directory.

= 5.0 =

* Additional settings: on_sent_ok and on_submit have been removed.
* New additional setting: skip_mail
* Flamingo: Inbound channel title changes in conjunction with a change in the title of the corresponding contact form.
* DOM events: Make an entire API response object accessible through the event.detail.apiResponse property.
* HTML mail: Adds language-related attributes to the HTML header.
* File upload: Sets the accept attribute to an uploading field.
* Introduces the WPCF7_MailTag class.
* Allows aborting a mail-sending attempt using the wpcf7_before_send_mail action hook. Also, you can set a custom status and a message through the action hook.
* Acceptance checkbox: Allows the specifying of a statement of conditions in the form-tag’s content part.
* Acceptance checkbox: Supports the optional option.
* New special mail tags: [_site_title], [_site_description], [_site_url], [_site_admin_email], [_invalid_fields], [_user_login], [_user_email], [_user_url], [_user_first_name], [_user_last_name], [_user_nickname], and [_user_display_name]
* New filter hooks: wpcf7_upload_file_name, wpcf7_autop_or_not, wpcf7_posted_data_{$type}, and wpcf7_mail_tag_replaced_{$type}
* New form-tag features: zero-controls-container and not-for-mail

== Upgrade Notice ==

= 5.1.1 =

Read the [release announcement post](https://wpusersubscribe.org/category/releases/) before upgrading. There is an important notice.

= 5.0.4 =

This is a security and maintenance release and we strongly encourage you to update to it immediately. For more information, refer to the [release announcement post](https://wpusersubscribe.org/category/releases/).
