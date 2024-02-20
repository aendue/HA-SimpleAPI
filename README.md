# HA-SimpleAPI

This interface is to read and set states in Home Assistant over HTTP Get/Post requests using Home Assistant API.
This API is made for applications that can't use authorization token in http headers. To get SimpleAPI working it is necessary to store the Home Assistant token inside HA-SimpleAPI.
Please use **ADD TOKEN** function on index.html.

WARNING: Please don't give Token to other people and install HA-SimpleAPI only in safe environments.

## Usage
Call http://ipaddress:port/index.html to add Token and Home Assistant IP/Port

```sh
  "getPlainValue": "http://IP-ADDRESS:PORT/getPlainValue.php?name=HOME_ASSISTENT_SENSOR",
  "get": "http://IP-ADDRESS/get.php?name=HOME_ASSISTENT_SENSOR",
  "set": "http://IP-ADDRESS:PORT/set.php?entity=HOME_ASSISTENT_ENTITY&cmd=HOME_ASSISTENT_COMMAND",
```

## Release


0.0.1 (20.02.2024)
 - (aendue) initial commit

## License
The MIT License (MIT)

Copyright (c) 2023-2024 aendue  andygrundt@gmail.com

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


