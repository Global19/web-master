<?php
require_once 'functions.inc';
head("machine inventory");
?>
<p>php.net is supported by a number of machines provided by a number
of generous sponsors. this is a basic inventory of those machines and
what services they provide.</p>

<h2>chek1.php.net (208.247.106.167)</h2>

<p><b>machine:</b> p2/350, 256MB RAM, 8.1GB HD, redhat 5.1</p>

<p><b>aliases:</b> php.net mx</p>

<p><b>notes:</b> an upgrade for this machine is imminent. sometime after that
is done, this machine will take over all of the non-www.php.net sites from
chek2.</p>

<h2>chek2.php.net (208.247.106.187)</h2>

<p><b>machine:</b> dual p3/650, 512MB RAM, 40.9GB HD, redhat 6.1</p>

<p><b>aliases:</b> www.php.net, bugs.php.net, conf.php.net, gtk.php.net, qa.php.net</p>

<h2>pair1.php.net (216.92.131.4)</h2>

<p><b>machine:</b> dual p3/1000 xeon, 512MB RAM, 27GB HD, freebsd 4.3</p>

<p><b>aliases:</b> lists.php.net, news.php.net, cvs.php.net, cvsup.php.net, pear.php.net</p>

<p><b>notes:</b> snmp is currently blocked on this machine (at the network
level by pair, due to the recent snmp security advisories).</p>

<h2>pair2.php.net (216.92.131.5)</h2>

<p><b>machine:</b> p3/566, 128MB RAM, 27GB HD, freebsd 4.3</p>

<p><b>notes:</b> this machine maintains a copy of ~ezmlm from pair1, so it can
take over the mailing lists if pair1 ever fails.</p>

<h2>rack1.php.net (209.61.157.217)</h2>

<p><b>machine:</b> dual p3/650, 1GB RAM, 33GB HD, redhat 7.1</p>

<p><b>notes:</b> this machine has been (temporarily?) sidelined. there are
bandwidth limitations, and we need to make sure monitoring is in place before
resuming use of the machine to make sure we don't exceed those limits.</p>

<h2>va1.php.net (198.186.203.51)</h2>

<p><b>machine:</b> dual p3/650, 1 GB RAM, 130GB HD, debian-stable</p>

<p><b>aliases:</b> rsync.php.net, snaps.php.net</p>

<p><b>notes:</b> this machine generates the online manuals. daily backups of
the cvs repository and the rsync modules are done. cricket also runs on this
machine to track the usage of all of the machines.</p>

<p>originally compiled by jim winstead, september 2001</p>
<?php
foot();
