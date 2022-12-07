# Laravel OJT Project

## Installation set up

## Getting Start

### git clone this repo link in your folder

`git clone https://github.com/TheintYadanarLwin/Laravel_OJT.git`

#### First time

_connect your database and copy paste these two sentenses in .env file_

```
cp .env.example .env
composer install
php artisan key:generate
npm install
```

Then you can access: http://localhost:8000

## DB

_creating tables in database_
`php artisan migrate`

_inserting data into tables_
`php artisan db:seed`

### Just run App

```
npm run dev
php artisan serve
```
## If You're Having Some error in download pdf
#### Laravel/Excel Package


_If you're having error when install this package_
`composer require maatwebsite/excel`

#### Use this command Instead
```
composer require maatwebsite/excel --ignore-platform-reqs
                        or
composer require psr/simple-cache:^2.0 maatwebsite/excel
```

_Then in `php.ini` file remove `;` infront of `extension=gd`_

#### How To Solve storage/framework" directory does not exist, the import will throw an exception: mkdir(): No such file or directory[BUG] 

_Additional Information
And I Create "storage/framework" folder manually, it's worked
    Or
modify source code:
the file at vendor/maatwebsite/excel/src/Files/TemporaryFileFactory.php line:52_
```
    public function makeLocal(string $fileName = null, string $fileExtension = null): LocalTemporaryFile
    {
        // if (!file_exists($this->temporaryPath) && !mkdir($concurrentDirectory = $this->temporaryPath) && !is_dir($concurrentDirectory)) {
        // new
        if (!file_exists($this->temporaryPath) && !mkdir($concurrentDirectory = $this->temporaryPath, 0777, true) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        return new LocalTemporaryFile(
            $this->temporaryPath . DIRECTORY_SEPARATOR . ($fileName ?: $this->generateFilename($fileExtension))
        );
    }
```

_Hope you Enjoy it!👍_

