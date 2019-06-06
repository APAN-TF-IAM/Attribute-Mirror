# Attribute-Mirror
Simple application that reflects users attributes that have been provided by their Identity Provider (IdP)

## Configuration
Index.php does most of the work by displaying the attributes that where released by the IdP. These attributes need to be prefixed by "APAN-" so the code can distinguish them from other values that are passed. To ensure the attributes do contain the correct prefix the following configuration needs to be added to /etc/shibboleth/shibboleth2.xml to the ApplicationDefaults

- attributePrefix="APAN-"
