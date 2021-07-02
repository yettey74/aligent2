# aligent2
Date Calc
[Yettey74@github](https://www.github.com/yettey74/aligent2 "Aligent2") 
### Created 25/06/2021
### Author Scot Henderson
***
## Version 0.0.1
### Create Pseudo scaffold
#### pseudo.md
* Added Pseudo Scaffold Inputs
* Added Pseudo Scaffold Operations
* Added Pseudo Scaffold Outputs
#### Created MarkDown File
#### README.md
***
# Version 0.1
## Version 0.1.0
### Create file scaffold
#### index.html
* blank canvas
#### index.php
* blank canvas
#### main.css
* blank canvas
#### erro400.php
* blank canvas
#### error500.php
* blank canvas
#### api.php
* blank canvas
#### thyme.class.php
* blank canvas
#### Updated MarkDown File
#### README.md
***
## Version 0.1.1
### Update file scaffold
#### index.html
* Updated landing page for non-compliant JS browsers
#### Updated MarkDown File
##### README.md
***
## Version 0.1.2
### Update file scaffold
#### index.php
* Updated landing page for compliant JS browsers
* Added head & body framework 
* Added Form to handle all calls
* use datetime-local basic html5 
#### Updated MarkDown File
##### README.md
***
## Version 0.1.3
### Update file scaffold
#### main.css
* Added all DOM elements by id
* Added all DOM elements by type=input['']
#### Updated MarkDown File
##### README.md
***
***
# Version 0.2
## Version 0.2.0
### Updated API
#### api.php
* Added ``` require 'thyme.class.php'; ```
* Added POST VARS cradle
* Added DEBUG ```echo $cradle->_toString();```
### Updated Thyme Class
#### thyme.class.php
* Added ``` __construct() ```
* Added ``` setDateObject1() ```
* Added ``` getDateObject1() ```
* Added ``` setDateObject2() ```
* Added ``` getDateObject2() ```
* Added ``` setDateType() ```
* Added ``` getDateType() ```
* Added ``` setTimeType() ```
* Added ``` getTimeType() ```
* Added ``` setTimezone1() ```
* Added ``` getTimezone1() ```
* Added ``` setTimezone2() ```
* Added ``` getTimezone2() ```
* Added ``` daysbetween() ```
* Added ``` weekdaysBetween() ```
* Added ``` weeksBetween() ```
* Added ``` __toString() ```
#### Updated MarkDown File
##### README.md
***
## Version 0.2.1
### Updated Thyme Class
#### thyme.class.php
* Added ``` daysbetween( ) ```
* Updated ``` __toString() ```
### Updated MarkDown File
##### README.md
***
## Version 0.2.2
### Updated Thyme Class
#### thyme.class.php
* Added ``` weekdaysBetween( ) ```
* Updated ``` __toString() ```
### Updated MarkDown File
##### README.md
***
## Version 0.2.3
####Updated Thyme Class
#### thyme.class.php
* Added ``` completeWeeks( ) ```
* Updated ``` __toString() ```
#### Updated MarkDown File
##### README.md
***
## Version 0.2.4
### Updated Thyme Class
#### thyme.class.php
* Added ``` getSplice() ```
* Added ``` getDisplayTypeText() ```
* Added ``` getDateTypeText() ```
* Added ``` _apiObject() ```
* Updated ``` __toString() ```
#### Updated MarkDown File
##### README.md
***
## Version 0.2.5
### Updated Thyme Class
#### thyme.class.php
* Added ``` years() ```
* Updated ``` _apiObject() ```
* Updated ``` completeWeeks() ```
#### Updated MarkDown File
##### README.md
***
## Version 0.2.6
### Updated Thyme Class
#### thyme.class.php
* Added ``` getZoneDiff() ```
* Updated ``` _apiObject() ```
### Updated MarkDown File
##### README.md
***
## Version 0.2.7
### Updated html & PHP Scaffold
#### index.html
* Updated ``` input[datetime-local]->input[date] ```
#### index.php
* Updated ``` input[datetime-local]->input[date] ```
#### thyme.class.php
* Updated ``` _toString() ```
#### Updated MarkDown File
##### README.md
***
## Version 0.2.8
### Updated CSS
#### main.css
* Updated ``` input[datetime-local]->input[date] ```
#### Updated MarkDown File
##### README.md
***
## Version 0.2.9
### Updated Thyme Class
#### thyme.class.php
* Removed ``` all Setters ```
#### Updated MarkDown File
##### README.md
***
***
# Version 0.3
## Version 0.3.0
### Added Input Error Handling
#### thyme.class.php
* Updated ``` getDateObject1() ```
* Updated ``` getDateObject2() ```
* Updated ``` getTimezone1() ```
* Updated ``` getTimezone2() ```
* Updated ``` getSplice ```
* Updated ``` getDisplayTypeText() ```
* Updated ``` getDateTypeText() ```
* Updated ``` getDateTypeText() ```
#### error400.php
Updated ``` filename erro400.php->error400.php ```
### Updated MarkDown File
##### README.md
***
## Version 0.3.1
### Added Unit Test file
#### testUnit.php
* Added ``` Test Units ```
#### api.php
* Removed ``` Manual Test Units ```
#### thyme.class.php
* Updated ``` getDisplayTypeText() ```
* Updated ``` _apiObject() ```
### Updated MarkDown File
##### README.md
***
***
# Version 0.4
## Version 0.4.0
### Tidy the code and fix bugs from tests
#### testUnit.php
* Added ``` Test Units ```
#### thyme.class.php
* Added ``` _isLeapYear() ```
* Updated ``` __constructor() ```
* Updated ``` daysbetween() to getDiff() ```
* Updated ``` _toString() ```
* Updated ``` _apiObject() ```
* Updated ``` completeWeeks() ```
* Updated ``` weekdaysBetween() ```
* Updated ``` getDayDiff() ```
* Updated ``` daysbetween() ```
* Updated ``` getDateTypeText() ```
* Updated ``` getDisplayTypeText() ```
* Updated ``` getZoneDiff() ```
* Updated ``` getSplice() ```
* Updated ``` getTimezone1() ```
* Updated ``` getTimezone2() ```
* Updated ``` getDateType() ```
* Updated ``` getTimeType() ```
* Updated ``` getDateObject1() ```
#### api.php
* Removed ``` Manual Tests ```
#### main.css
* Removed  ``` Trailing White Space ```
### Updated MarkDown File
##### README.md
***
## Version 0.4.1
### Catching All Errors when object passed
#### thyme.class.php
* ``` NaN ```
* ``` Null ```
* ``` Array ```
* ``` EMPTY ```
* Updated ``` getDateObject1() ```
* Updated ``` getDateObject2() ```
* Updated ``` getSplice() ```
* Updated ``` getDayDiff() to getDaysBetween() ```
* Updated ``` weekdaysBetween() to getweekdaysBetween()```
* Updated ``` completeWeeks() to getcompleteWeeks()```
* Updated ``` _isValid() to _isDateValid()```
* Updated ``` _isLeapYear() ```
* Updated ``` _apiObject() ```
* Updated ``` _toString() ```
#### testunit.php
### Added test to check for all conditions
* Updated ``` Test Units ```
* Updated ``` Results Output ```
### Added a dirty test page
#### testapi.php
* Added ``` Manual Test Units ```
### Added another dirty test page
#### date.php
* Added ``` Manual Test Units ```
#### api.php
* Removed ``` Manual Test Units ```
### Updated MarkDown File
#### README.md
***
***
## Version 0.5.0
### Prepare file structure for submission
* Removed  ``` index.html ```
* Removed  ``` index.php ```
* Removed  ``` error400.php ```
* Removed  ``` error500.php ```
* Removed  ``` testapi.php ```
* Removed  ``` date.php ```
* Removed  ``` main.css ```
* Removed  ``` PSEUDO.md ```
* Updated  ``` README.md to _README.md ```
* Updated  ``` api.php ```
### Updated MarkDown File
#### README.md
***
## Version 0.5.1
### Adding sandbox for DateTime Object
* Added ``` Sandbox Folder ```
* Added ``` aligent.class.php ```
* Added ``` test.php ```
* Added ``` testapi.php ```
* Added ``` README.md ```
### Updated MarkDown File
#### README.md
***
## Version 0.5.2
### Moved Date library and test bed to SandboxDateLibrary
* Moved ``` api.php --> sandBoxLibrary/api.php ``` 
* Moved ``` testunit.php --> sandBoxLibrary/api.php ``` 
* Moved ``` thyme.class.php --> sandBoxLibrary/thyme.class.php ``` 
* Moved ``` sandbox/aligent.class.php --> aligent.class.php ``` 
* Moved ``` sandbox/test.php --> test.php ``` 
* Moved ``` sandbox/testapi.php --> testapi.php ``` 
* Updated ``` sandbox/--> sandboxDateTimeLibrary/ ``` 
### Updated MarkDown File
#### README.md
***
## Version 0.5.3
### Documented the aligent class
* Added ``` Doc stubs to each function ```
#### aligent.class.php 
* Added ``` Doc stubs to each function ```
* Added ``` _setFeb29End() ```
* Updated ``` _setFeb29() --> _setFeb29Start() ```
### Increased amount of tests
#### testapi.php 
* Updated ``` more tests for Multi Leap year   ```
### Reworked output script to be more readable for quick testing
#### test.php 
* Updated ``` output script  ```
### Updated MarkDown File
##### README.md
***
## Version 0.5.4
### Updated aligent class
#### aligent.class.php 
* Added ``` Doc stubs to each function ```
* Added ``` _setFeb29End() ```
* Updated ``` _setFeb29() --> _setFeb29Start() ```
* Updated ``` frogger() ```
### Increased amount of tests
#### testapi.php 
* Updated ``` Test if/then to ternary script  ```
### Reworked output script to be more readable for quick testing
#### test.php 
* Updated ``` output script  ```
### Updated MarkDown File
#### README.md
***
***
## Version 0.6.0
### Timezone handling
#### testapi.php
* Added ``` TZ List ```
* Added ``` TZ tests ```
### Updated MarkDown File
#### README.md
***
## Version 0.6.1 -- 180 Bug Free Results
### Update to handle poorly formed date strings
#### aligent.class.php 
* Added ``` _isGoodDate_ ```
* Updated ``` Check to see which date is used first ```
* Updated ``` frogger()  ``` Now returning ABS() for negative leap years
#### testapi.php
* Added ``` More tests ```
### Updated MarkDown File
#### README.md
***
## Version 0.6.2
#### testapi.php
* Added ``` More tests ```
### Updated MarkDown File
#### README.md
***
## Version 0.6.3
### Bug found on leapyear testing
#### aligent.class.php 
* Updated ``` getcompleteWeeks() ```
* Updated ``` getweekdaysBetween() ```
#### testapi.php
* Added ``` Fixed result expected errors ```
### Updated MarkDown File
#### README.md
***

***
# WishList
### Add tests for limits < 02-29 , == 02-29, > 02-29
* add ``` 0 Leap year test ``` 1988-02-26 to 1988-2-28
* add ``` 1 Leap year test ``` 1988-02-26 to 1992-3-1
* add ``` 1 Leap year test ``` 1988-02-26 to 1996-2-28
* add ``` 2 Leap year test ``` 1988-02-26 to 1996-3-1
* add ``` 2 Leap year test ``` 1988-02-26 to 1996-2-28
* add ``` 3 Leap year test ``` 1988-02-26 to 1996-3-1
### Add tests for poorly formed date() and time() and TZ() strings
* add ``` Unix  based timestamps converted by DateTime->setTimestamp() ```
* add ``` Abilty to create a time string with setTime() ```
* add ``` Abilty to create a ISODate with setISODate() ```
* add ``` Abilty to create a Date with setDate() ```
* add ``` Abilty to Add amount with add() ```
* add ``` Abilty to Modify amount with modify() ```
* add ``` Abilty to Subtract amount with sub() ```
* add ``` short date ``` 01-01-21
* add ``` short date with no day ``` 01-21
* add ``` Long date ``` 01-01-2021
* add ``` Long date with no day ``` 01-2021
* add ``` Short Date with time ``` 01-01-21 00:00:00
* add ``` Short Date with time and no day ``` 01-21 00:00:00
* add ``` Long date with time ``` 01-2021 00:00:00
* add ``` Long date with time and no day ``` 01-2021 00:00:00
* add ``` Short Date with time / TZ ``` 01-01-21 00:00:00+09:30
* add ``` Short Date with time / TZ and no day ``` 21 00:00:00+09:30
* add ``` Long Date with time / TZ ``` 01-01-2021 00:00:00+09:30
* add ``` Long Date with time / TZ and no day ``` 01-2021 00:00:00+09:30
* add ``` Short Date No Day with time / TZ ``` 01-21 00:00:00+09:30
* add ``` Short Date No Day with time / TZ and no day ``` 21 00:00:00+09:30
* add ``` Long Date No Day with time / TZ ``` 01-01-21 00:00:00+09:30
* add ``` Long Date No Day with time / TZ and no day``` 01-21 00:00:00+09:30