<?php

abstract class InvalidFileException extends \Exception { }
class InvalidExtensionException extends InvalidFileException { }
class UnknownExtensionException extends InvalidFileException { }