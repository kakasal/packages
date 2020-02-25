# bizsms.pk SMS Serivice

How to install

To install follow these steps
1- install `composer install shahidkarimi/bizsms`
2- Publish vendor
3- Change config


# Confgiure

1- Add this in provider 'BizsmsServiceProvider::class'
2- add this alieas ``bizsms => BizsmsServiceProvider::class``

# How to use?

bizsms::send('0346123456', 'SMS Body');

