# zwamp-nighty-win64

## What is zwamp

Z-WAMP is a lightweight zero-install Web server package that runs on Windows.

![screenshot](http://zwamp.sourceforge.net/screenshot.png "Screenshot")

**I'm not the creator of zwamp**

Please visit the [zwamp official homepage](http://zwamp.sourceforge.net/) for more info. 

If you like zwamp and wanna support, please use [this page](http://sourceforge.net/p/zwamp/donate/?source=navbar).

## What is this ?

It's an updated version of zwamp with latests stables availables.

I needed Mongo 3.0.0 but zwamp wasn't updated. That's why i created this.

Zwamp release used: zwamp-x64-2.2.1-full.zip

## What's inside ?

* MongoDB 3.0.0 (PHP 1.3.4 driver)(Mongo 3.0.0 client)

_Untouched_

* Apache 2.4.3
* MySQL 5.6.10
* PHP 5.4.12
* MiniPerl 5.14.2
* APC 3.1.13
* XCache 3.0.0
* XDebug 2.2.1
* Adminer 3.5.1
* PHP MongoDB Admin


## Use it !

* Download the [latest release.zip](https://github.com/romualdr/zwamp-nighty-win64/releases/latest)
* Unzip
* Execute ```zwamp.exe```
* Profit !

## Contributions

This repository is much like a diff with the zwamp release used.

Please use .md files for signaling a .exe inclusion with download link.

An automatic builder, who download zwamp version and put everything into place will be available soon.

Contributions are **VERY** welcome to keep this project updated.

If you're a master in PHP evnvironnement and stuff (which i'm not), please update this repository.

DO **NOT** create a pull request including unstable / dev / RC / staging / *whatever_not_stable*.

## Changelog

### [0.0.1](https://github.com/romualdr/zwamp-nighty-win64/releases/tag/0.0.1)

* Added folder "tools"
* Included mongo client 3.0.0
* Mongo updated to 3.0.0 (Windows 64-bit 2008 R2+)
* Activated mysql.so on PHP.ini

## Original README

```
The Z-WAMP Server Pack is a lightweight zero-install Web server package that
runs on Windows. The project aims to provide the latest production/stable
versions of Apache, MySQL, PHP, Adminer, MongoDB, MemCached, SQLite,
eAccelerator, and Alternative PHP Cache (APC) to boost server performance.

Z-WAMP is hosted by SourceForge. Grab the latest version of this software at
http://zwamp.sourceforge.net.

If you feel that the Z-WAMP Server Pack is one great addition to your Web
development arsenal and it saves you a lot of time and money, please consider
making a donation to the project. Aside from motivating the people who make
this package available to the world, it also helps keep the project alive and
up-to-date.
```

***

### Why 'nighty' ?

It's kind of a "nightly" build of zwamp, however i didn't wanted to use the word "nightly" in a wrong way.

*It was actually a typo ... but in the end, everything's fine ! mrpfh.*
