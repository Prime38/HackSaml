<?php
/**
 * SAML 1.1 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

/*
$metadata['theproviderid-of-the-idp'] = [
    'SingleSignOnService' => 'https://idp.example.org/shibboleth-idp/SSO',
    'certificate' => 'example.pem',
];
*/
$metadata['http://idp.govt.com/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'http://idp.govt.com/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp.govt.com/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp.govt.com/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIE2jCCA0KgAwIBAgIJAI6h3Fy8i2UoMA0GCSqGSIb3DQEBCwUAMIGBMQswCQYDVQQGEwJCRDEPMA0GA1UECAwGU3lsaGV0MQ8wDQYDVQQHDAZTeWxoZXQxDTALBgNVBAoMBFNVU1QxDDAKBgNVBAsMA0NTRTEVMBMGA1UEAwwMaWRwLmdvdnQuY29tMRwwGgYJKoZIhvcNAQkBFg1pZHBAZ21haWwuY29tMB4XDTE5MDQxODAzNTgzMFoXDTI5MDQxNzAzNTgzMFowgYExCzAJBgNVBAYTAkJEMQ8wDQYDVQQIDAZTeWxoZXQxDzANBgNVBAcMBlN5bGhldDENMAsGA1UECgwEU1VTVDEMMAoGA1UECwwDQ1NFMRUwEwYDVQQDDAxpZHAuZ292dC5jb20xHDAaBgkqhkiG9w0BCQEWDWlkcEBnbWFpbC5jb20wggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQCtW/O0We8qm81SzU03wUVK+GEx5jRrGZwVFE9lbdH55rEr3twVJjb9dAIT/8ARsD1SKzgXEE/LqYVOx3So4iPu8MDVODjqimdhoYdZuunZ6E9pbdpJ/nfMQL5E05o5RgYzNmjzXBZvMKeEZoMO7sHvavshdFCYFgJudCmnqkl2mEOriVVvv8veReEUP6Unfjk3e4SkuvMvZyYkZa9lJPfMqnKOdvwtqAX84K+EYC+TyyQsO86CC22v7dnIDkJ5y/LNbCEsT/19WQbbr5mJg5smuZXNepgHhDtQSYvq1adJ/8/pMiRmlHhGKha40uqPUd6wrL3OF2vTqNQeAB5jmuu181Fpa5L/PleR3rIQKC1Ig4FQ0IBvB5hpghcbLxto66uD77BAMhoHX1p4jTnI82jrXyklPLOFp3Mb06pFOIRvnyDsT2+ZZmX5dOwJ0uP1neRf+76C0KLB1kuGPBgofwAgzmE9sg3A1JvUbEHMy1bQn/05FnBNDmrFuc+XXUz7Tk0CAwEAAaNTMFEwHQYDVR0OBBYEFMft2yK4/e3geikQF0jvYM+zVCLbMB8GA1UdIwQYMBaAFMft2yK4/e3geikQF0jvYM+zVCLbMA8GA1UdEwEB/wQFMAMBAf8wDQYJKoZIhvcNAQELBQADggGBAD2CTS1AelT0yS0PZsdNVd307Hy43Zwmn+G0hV9wzkSZdfAROrQ+nIvblg7whMiR9pdK6unfCKbJIqN0Sd9DI52y0ZEoixqDZg0Kgi3jbwRH7QAaClthtnbJMS0/mbA5m8WiCtU3+ULqg/TsWl+CyIhTiqLX14Sj6Xs71S7lP/D5Q+sOzY1AoBBvQvnLhIUn1Oy4rEOHQC3tBEOb5uXRU/7vyhdeD/k/ATUHodQ27ee7kEIE9u/SpBgl0mYcrJrbqmXmijuRLg1XjxPwMghDKhsoYgdZrKxYG22F1GsBxSF4mFhd1GSLMeVfu7l8KrqLsTX4QrbdwE/p6Zqgwq+aZD5kkMiYwJnnMUpXPe4veB1MkcDN4Tg03AReiYdFSlo7QWUFVEBzVQ/TktVuQr0nggLuFB8tqbjSfzz4yuayrsDWhVyL6QmIqugWK8stYQo3eUaVYIc/AJ4gv8FWmpbF93zO029uZV4MdHV94hFeSJ5VPhYFBAtKvdwkU+VERDjhfw==',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'contacts' => 
  array (
    0 => 
    array (
      'emailAddress' => 'shoumikprime@gmail.com',
      'contactType' => 'technical',
      'givenName' => 'shoumik',
      'surName' => 'prime',
    ),
  ),
);

