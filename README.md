# StandardDeviation
The internal functionality of this class is manipulate a data set to obtain the standard deviation and the variance of the set.

<img src="https://scontent.fssa18-1.fna.fbcdn.net/v/t1.0-9/53179988_2037559849699913_5974770022403276800_n.jpg?_nc_cat=100&_nc_ht=scontent.fssa18-1.fna&oh=03899f61e02d7ae4271a8e104b547f38&oe=5D0EF0A2">

# Description
<p>
  In statistics, the standard deviation (SD, also represented by the lower case Greek letter sigma σ or the Latin letter s) is a measure    that is used to quantify the amount of variation or dispersion of a set of data values. 
</p>

# Usage

```php

require_once("src/StandardDeviation.php");

# Example of data set
$data = [1,2,3,4,7,8,10,5.5];

$standard = new Statistic\StandardDeviation();

# Inputting the data set
$standard->setRawGroup($data);

# Methods available to be used
var_dump($standard->variance());
var_dump($standard->deviation());
var_dump($standard->average());

```
