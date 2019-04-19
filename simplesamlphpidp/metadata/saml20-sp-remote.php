<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
$metadata['http://example.com/'] = array (
  'entityid' => 'http://example.com/',
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'shoumik',
      'surName' => 'prime',
      'emailAddress' => 
      array (
        0 => 'shoumikprime@gmail.com',
      ),
    ),
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'http://example.com/simplesaml/module.php/saml/sp/saml2-acs.php/example.com',
      'index' => 0,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'http://example.com/simplesaml/module.php/saml/sp/saml1-acs.php/example.com',
      'index' => 1,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'http://example.com/simplesaml/module.php/saml/sp/saml2-acs.php/example.com',
      'index' => 2,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'http://example.com/simplesaml/module.php/saml/sp/saml1-acs.php/example.com/artifact',
      'index' => 3,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://example.com/simplesaml/module.php/saml/sp/saml2-logout.php/example.com',
    ),
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIE4DCCA0igAwIBAgIJAMyGd+dzCMaOMA0GCSqGSIb3DQEBCwUAMIGEMQswCQYDVQQGEwJCRDEPMA0GA1UECAwGU3lsaGV0MQ8wDQYDVQQHDAZTeWxoZXQxDTALBgNVBAoMBFNVU1QxDDAKBgNVBAsMA0NTRTEUMBIGA1UEAwwLZXhhbXBsZS5jb20xIDAeBgkqhkiG9w0BCQEWEWFkbWluQGV4YW1wbGUuY29tMB4XDTE5MDQxNzE3NDQyNloXDTI5MDQxNjE3NDQyNlowgYQxCzAJBgNVBAYTAkJEMQ8wDQYDVQQIDAZTeWxoZXQxDzANBgNVBAcMBlN5bGhldDENMAsGA1UECgwEU1VTVDEMMAoGA1UECwwDQ1NFMRQwEgYDVQQDDAtleGFtcGxlLmNvbTEgMB4GCSqGSIb3DQEJARYRYWRtaW5AZXhhbXBsZS5jb20wggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQCyfHUJarCkTHJCh7yYOBw+R9iQHzZnJY+KM1VEI6aTHoJw3SmRoVTVg8bpi4yAMDhYCnp0cTVBfPGWM21dNZ598x7VhUolUIa2KFu6qDuBsjnx7wqTnaTCLAEIcowgNR7hfp5oAXLKNWl8p18bObUXeO2xzLXtdK8/zXGltkGu1DdMmLGfYI4hG1nMhJ/SOMWC1D7OV5MgfDL6VUrcZr6Q8H3odQgy7bYKNEBLBeLAqUkOS9zywyF1M6M1sfuui1Qczjn5xT6EGihPFOHEpyXSd35MciDVZ9GdA5LGoNFi/II3prcwsxrgg19Xz+/L3h1ZEgFuZc35tE/0mtTHe2tBeKKqTvl2qkFp8lSdNPPgyU4cFdxxup99ofs/Ga5OhlydtmtEA9wwQS3c2VW9QI2METEtxGzafRXIS2PJbTh098B+bvMXIvvn5EaRIVt2lK+C9DeMqQyPaukZfswqELZ+bs4k4rh8cY171TO0AoBKvse5K+JE59Y05wT3nCKkV8sCAwEAAaNTMFEwHQYDVR0OBBYEFN1Lj0y40YM9UTkTe7rIvYPgJM8wMB8GA1UdIwQYMBaAFN1Lj0y40YM9UTkTe7rIvYPgJM8wMA8GA1UdEwEB/wQFMAMBAf8wDQYJKoZIhvcNAQELBQADggGBAEUb3BjvgqoAO8ycfdpuH34X2+XQKKUmYYLxch7qjwv9aPWaTRYA+jyjkhiYYHij0YtfXY55y8QvKo2an9dqb02DBz3tjpAfeyCR9FrBRRwlcXdQjT+kZir259tE5tOZQtMVt69BEcfD7//gsL/FHGBBP6kZM8iXELp2lyXZkrtSRtnx/E5Z9DFx7QGleDQioZhGQMnqdEajj0xeOfUAZc6k09cm59oWPBTdfFXmch5/VLZQQnuAe922G/OcYzLH/FAld4w/79St5PtARoMMXJEmKxa+L7tTJ2c2etpiynVhdERu6TR/gxPXGRe9cnHUer5BWyF2A3xafQ5JfpQQ3cMZNCNevuBkEkscFaSz2Ho0Aa/xo1XlG4E9gBv0tJzi55puk1KnxJPmWLEX/eaLwXfxA0faXV7dR5ggxi1VobkodFGUaHJ7AIRZPCNZ5NuLp+X7aHvZWt3MX2iZ4eSB3EQS1TnDWn+VCegXI0AJA/5Kjl/tN+FCrCMOBxKOdbHApQ==',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIE4DCCA0igAwIBAgIJAMyGd+dzCMaOMA0GCSqGSIb3DQEBCwUAMIGEMQswCQYDVQQGEwJCRDEPMA0GA1UECAwGU3lsaGV0MQ8wDQYDVQQHDAZTeWxoZXQxDTALBgNVBAoMBFNVU1QxDDAKBgNVBAsMA0NTRTEUMBIGA1UEAwwLZXhhbXBsZS5jb20xIDAeBgkqhkiG9w0BCQEWEWFkbWluQGV4YW1wbGUuY29tMB4XDTE5MDQxNzE3NDQyNloXDTI5MDQxNjE3NDQyNlowgYQxCzAJBgNVBAYTAkJEMQ8wDQYDVQQIDAZTeWxoZXQxDzANBgNVBAcMBlN5bGhldDENMAsGA1UECgwEU1VTVDEMMAoGA1UECwwDQ1NFMRQwEgYDVQQDDAtleGFtcGxlLmNvbTEgMB4GCSqGSIb3DQEJARYRYWRtaW5AZXhhbXBsZS5jb20wggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQCyfHUJarCkTHJCh7yYOBw+R9iQHzZnJY+KM1VEI6aTHoJw3SmRoVTVg8bpi4yAMDhYCnp0cTVBfPGWM21dNZ598x7VhUolUIa2KFu6qDuBsjnx7wqTnaTCLAEIcowgNR7hfp5oAXLKNWl8p18bObUXeO2xzLXtdK8/zXGltkGu1DdMmLGfYI4hG1nMhJ/SOMWC1D7OV5MgfDL6VUrcZr6Q8H3odQgy7bYKNEBLBeLAqUkOS9zywyF1M6M1sfuui1Qczjn5xT6EGihPFOHEpyXSd35MciDVZ9GdA5LGoNFi/II3prcwsxrgg19Xz+/L3h1ZEgFuZc35tE/0mtTHe2tBeKKqTvl2qkFp8lSdNPPgyU4cFdxxup99ofs/Ga5OhlydtmtEA9wwQS3c2VW9QI2METEtxGzafRXIS2PJbTh098B+bvMXIvvn5EaRIVt2lK+C9DeMqQyPaukZfswqELZ+bs4k4rh8cY171TO0AoBKvse5K+JE59Y05wT3nCKkV8sCAwEAAaNTMFEwHQYDVR0OBBYEFN1Lj0y40YM9UTkTe7rIvYPgJM8wMB8GA1UdIwQYMBaAFN1Lj0y40YM9UTkTe7rIvYPgJM8wMA8GA1UdEwEB/wQFMAMBAf8wDQYJKoZIhvcNAQELBQADggGBAEUb3BjvgqoAO8ycfdpuH34X2+XQKKUmYYLxch7qjwv9aPWaTRYA+jyjkhiYYHij0YtfXY55y8QvKo2an9dqb02DBz3tjpAfeyCR9FrBRRwlcXdQjT+kZir259tE5tOZQtMVt69BEcfD7//gsL/FHGBBP6kZM8iXELp2lyXZkrtSRtnx/E5Z9DFx7QGleDQioZhGQMnqdEajj0xeOfUAZc6k09cm59oWPBTdfFXmch5/VLZQQnuAe922G/OcYzLH/FAld4w/79St5PtARoMMXJEmKxa+L7tTJ2c2etpiynVhdERu6TR/gxPXGRe9cnHUer5BWyF2A3xafQ5JfpQQ3cMZNCNevuBkEkscFaSz2Ho0Aa/xo1XlG4E9gBv0tJzi55puk1KnxJPmWLEX/eaLwXfxA0faXV7dR5ggxi1VobkodFGUaHJ7AIRZPCNZ5NuLp+X7aHvZWt3MX2iZ4eSB3EQS1TnDWn+VCegXI0AJA/5Kjl/tN+FCrCMOBxKOdbHApQ==',
    ),
  ),
);
/*
 * This example shows an example config that works with G Suite (Google Apps) for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address at
 * G Suite. In example, if your Google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
$metadata['google.com'] = [
    'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes' => false,
];

$metadata['https://legacy.example.edu'] = [
    'AssertionConsumerService' => 'https://legacy.example.edu/saml/acs',
    /*
     * Currently, SimpleSAMLphp defaults to the SHA-256 hashing algorithm.
     * Uncomment the following option to use SHA-1 for signatures directed
     * at this specific service provider if it does not support SHA-256 yet.
     *
     * WARNING: SHA-1 is disallowed starting January the 1st, 2014.
     * Please refer to the following document for more information:
     * http://csrc.nist.gov/publications/nistpubs/800-131A/sp800-131A.pdf
     */
    //'signature.algorithm' => 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
];
