# StandardDeviation
The internal functionality of this class is manipulate a data set to obtain the standard deviation and the variance of the set.

<img src="https://www.thoughtco.com/thmb/GVy7U2pn2FP2Tut4MG53ZiCgOCQ=/768x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/calculate-a-sample-standard-deviation-3126345-v4-CS-01-5b76f58f46e0fb0050bb4ab2.png">

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
