# Aligent2
Date Calc
[Yettey74@github](https://www.github.com/yettey74/aligent2 "Aligent2") 
### Created 25/06/2021
### Author Scot Henderson
***
## Description
### Takes 2 dates and:
### Returns
#### 1. total days between
#### 2. total week days
#### 3. complete weeks
### Flags
#### a. Days ( default )
#### b. seconds
#### c. minutes
#### d. hours
#### e. years
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
* Added ``` setFeb29Start() ```
* Updated ``` frogger() ```
* Removed ``` _setFeb29()  ```
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
* Added ``` _isGoodDate() ```
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
## Version 0.6.4 -- 206 Bug Free Results
#### aligent.class.php 
* Added ``` _formDigits() ``` // added padding for single year
* Added ``` _getTime() ``` // add to handle alternative time string
* Added ``` _getZone() ``` // add to handle alternative TZ strings
* Updated ``` _isGoodDate() -> _dateConverter() ```
* Updated ``` _getDate() ```
#### testapi.php
* Added ``` Leap year tests ```
### Updated MarkDown File
#### README.md
***
## Version 0.6.5 -- 218 Bug Free Results
#### aligent.class.php 
* Added ``` _isWeekday() ``` <br> checks (int)day instead of string(day)
* Updated ``` getweekdaysBetween() ```<br> Fixed bug where weekdays between included start + end when < 6 days
* Updated ``` _setFeb29() ```<br> Handles next leap year to handle start and end date
* Updated ``` _formDigits() ```<br> Fixed bug returning year > 2004 when year < 2000
* Removed ``` _setFeb29Start() ``` <br> ``` _isWeekday() ``` now handles this call
* Removed ``` _setFeb29End() ``` <br> ``` _isWeekday() ``` now handles this call
#### testapi.php
* Added ``` Tests for weekdaycount Start = true, end = true ```
#### Added sandboxDateTimeLibrary/negYear.php
* Added output script to test strange or negative date strings 
### Updated MarkDown File
#### README.md
***
## Version 0.6.6 -- 231 Bug Free Results
#### aligent.class.php 
* Added ``` CONST MAX_YEAR_STRING ```
* Added ``` CONST MAX_YEAR_INT ```
* Added ``` CONST MIN_YEAR_STRING ``` 
* Added ``` CONST MIN_YEAR_INT ``` 
* Added ``` CONST MAX_LEAP_STRING ```
* Added ``` CONST MAX_LEAP_INT ``` 
* Added ``` CONST MIN_LEAP_STRING ```
* Added ``` CONST MIN_LEAP_INT ``` 
* Added ``` _timeToDate() ``` <br> Converts integer time to string
* Added ``` _getWeekdayInt() ``` <br> Returns day as int
* Updated ``` getTotalDaysBetween() ``` <br> Return s object in all instances
* Updated ``` _dateConverter() ``` <br> Return s object in all instances
* Updated ``` _setFeb29() ``` <br> Returns object in all instances
* Updated ``` _setFeb29() ``` <br> Fixed leapyear boundary issue
* Updated ``` _isLeap() ``` <br> Fixed boundary issue
* Removed ``` _isMonday() ``` <br> Handled by _getWeekdayInt()
#### testapi.php
* Added ``` Tests for string date ```
* Added ``` Tests for int date ```
* Added ``` Tests for mixed input date types of string / integer / object ```
### Updated MarkDown File
#### README.md
***
***
## Version 0.7.0
### Implements Throwable 
#### aligent.class.php 
* Added ``` _isDateNull() ``` <br> Checks if there is illegals in the string
* Added ``` _strungOutDate() ``` <br> returns an array of chars from a string input.  Internal Private function to support _isBadDate()
* Added ``` Exception Handling ``` <br> Return a new DateTimeObject 0001-01-01 00:00:00+00:00 if throwable() in test harness only
#### testapi.php
* Added ``` Null tests ```
* Added ``` 1/0 tests ```
### Updated MarkDown File
#### README.md
***
***
## Version 0.7.1
### Implements Throwable 
#### aligent.class.php 
* Added ``` _formTwoDigits() ``` <br> returns a formatted number with leading 0 when < 10
* Updated ``` _formYearDigits() ``` <br> returns a formatted number with leading 0 when < 999
* Updated ``` _dateConverter() ``` <br> now handles Throwable Excelptions
* Removed ``` _formDigits() ``` <br> Now handled seprately by _formTwoDigits() && _formYearDigits()
### Updated MarkDown File
#### README.md
***
***
## Version 0.8.0  -- 46037 Bug Free Results
### Update code to handle any TZ instead of hardcoding AUS / ADL
#### aligent.class.php 
* Updated all references to set as ``` UTC ```
* Updated ``` _dateConverter() ``` <br> returns value at end instead of if test true
#### testapi.php
* Added ``` TZ loop tests ``` <br> Using %2 array set to half the TZ list
* Updated ``` Throwable ``` <br> Returns on Catch instead of finally
### Updated MarkDown File
#### README.md
***
## Version 0.8.1
###  Fixed datetime = 0000-00-00 00:00:00+00:00 throws -001-11-30T00:00:00+00:00
#### aligent.class.php 

#### testapi.php

### Updated MarkDown File
#### README.md
***
***
## ERROR LOG
<i><u>ToDo List</u></i>

2. we could try and check for strings that have RFC formatting diffferent to standard y-m-d h:i:s
3. we could look at microseconds 'U' being a parameter anyway y-m-d h:i:s.U
4. datetime = 0000-00-00 00:00:00+00:00 throws -001-11-30T00:00:00+00:00
6. Leapyear not setting correctly again .. ? math problem ? reverse date issue ( should just return next forward leap only )
7. What if there is no DateTime class on the php server .. we need to deal with it by a custom written class

<i><u>ATTENDED</u></i>

<i>1. Need to find more errors .. try for nasties like null, nan, blank, empty, array, ascii(char), "0a" == true, invere("0a") == false, 1/"0a" return string to int = 0 then performs calc </i>

<i>5. Need to catch Timezone errors "Australia/Rome" // throwable catch </i>

## UNCALLED FUNCTIONS
* ``` _getTime() ```
* ``` _getZone() ```
* ``` _timeToDate() ```
* ``` _isWeekday() ```
* ``` _isWeekday() ```
* ``` _strungOutDate() ```
***
## WishList
### Add tests for poorly formed date() and time() and TZ() strings
* add ``` Unix  based timestamps converted by DateTime->setTimestamp() ```
* add ``` Abilty to create a time string with setTime() ```
* add ``` Abilty to create a ISODate with setISODate() ```
* add ``` Abilty to create a Date with setDate() ```
* add ``` Abilty to Add amount with add() ```
* add ``` Abilty to Modify amount with modify() ```
* add ``` Abilty to Subtract amount with sub() ```
* add ``` Circular infinite reference to leapyear ```<br> All Years have a leap year in time loop ??
* add ``` Priavte function() where appropriate to increase security ```
### Atttended
#### 03/07/2021
* ``` Abilty to Handle negative years ```
* ``` Abilty to deal with strtotime() ```
* ``` CONSTS ADDED ```
#### 04/07/2021
* Implement throwable for all tests in the API call so they are dealt with on the fly
* Implement throwable for strings to remove ``` _isDateBade() && _strungOutDate()```
* Implement throwable for integer
* Handling throwable for DateTime() where object != instanceof DateTime;
* Catch bad TZ throwable for DateTime()->setTimezone();
* Handles all timezones if not properly formatted
1. Need to find more errors .. try for nasties like null, nan, blank, empty, array, ascii(char), "0a" == true, invere("0a") == false, 1/"0a" return string to int = 0 then performs calc
5. need to catch Timezone errors "Australia/Rome" // throwable catch