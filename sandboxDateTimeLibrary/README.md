# DateTimeLib
 Example use of DateTime Library

## Version 0.1.0
#### Created Scaffold
* Added ```api.php ```
* Added ```_api( $date1, $date2, $option = 1, $time = 'd' ) ```
* Added ``` getDiff( $date2, $absolute = NULL ) ```
* Added ``` getDayDiff( $date1, $date2 ) ```
* Added ``` getweekdaysBetween( $date2 ) ```
* Added ``` getcompleteWeeks( $date2 ) ```
* Added ``` test objects $date1, $date2 ```

* Updated ```api.php ```
* Updated ```_api( $date1, $date2, $option = 1, $time = 'd' ) ```
* Updated ``` getDiff( $date2, $absolute = NULL ) ```
* Updated ``` getDayDiff( $date1, $date2 ) ```
* Updated ``` getweekdaysBetween( $date2 ) ```
* Updated ``` getcompleteWeeks( $date2 ) ```

## Version 0.1.1
#### Need to pass params as date1, date2, flag
* Updated ``` getDayDiff( $date1, $date2 ) --> getDayDiff( $date1, $date2, $flag = '' ) ```
* Updated ``` getweekdaysBetween( $date1, $date2, $flag = '' ) ```
* Updated ``` getTotalDays( $date1, $date2, $flag = '' ) ```

## Version re-writed :-)
* fixed bug with days -> used '%a' to get total days not jsut days in month




## wishlist
#### Find solution for DateTime adjust by year 
#### Leap year adjust