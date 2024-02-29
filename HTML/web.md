# Researches

   ## Topics
- [Researches](#researches)
  - [Topics](#topics)
    - [How the web works](#how-the-web-works)
    - [HTTP](#http)
    - [Web servers](#web-servers)
    - [DNS](#dns)
    - [Reference](#reference)

---
### How the web works
The process is quite simple. Firstly, you enter a domain name or a  website address in the search bar. 
Then the browser passes the request to DNS Server. DNS server acts as an address directory. It converts 
the human-readable address to a machine-readable address i.e. the IP  address of the Website address to a 
machine-readable address i.e. the IP  address of the website.

Then it passes the request to the main server or the server where your site is stored. Then the server 
provides the response to the browser and now you are able to access the website.  The whole process takes 
hardly 1 or 2 seconds.
![pic](https://www.hostitsmart.com/manage/images/kb/112_How-does-a-website-work.jpg)

### HTTP
The Hypertext Transfer Protocol (HTTP) is the foundation of the World Wide Web, and is used to load 
webpages using hypertext links. HTTP is an application layer protocol designed to transfer information 
between networked devices and runs on top of other layers of the network protocol stack. A typical flow 
over HTTP involves a client machine making a request to a server, which then sends a response message.
An HTTP request is the way Internet communications platforms such as web browsers ask for the information 
they need to load a website.

Each HTTP request made across the Internet carries with it a series of encoded data that carries different 
types of information. A typical HTTP request contains:

- HTTP version type
- URL
- an HTTP method
- HTTP request headers
- Optional HTTP body.

### Web servers 
A web service is a software system that supports interoperable machine-to-machine interaction over a 
network. It has an interface described in a machine-processable format (specifically, web Service 
Definition Language, or WSDL).

web services fulfill a specific task or a set of tasks. A web service is described using a standard, 
formal XML notion, called its service description, that provides all of the details necessary to interact 
with the service, including message formats (that detail the operations), transport protocols, and location.

The nature of the interface hides the implementation details of the service so that it can be used 
independently of the hardware or software platform on which it is implemented and independently of the 
programming language in which it is written.

This independence allows and encourages web service based applications to be loosely coupled, component 
oriented, cross-technology implementations. web services can be used alone or with other web services to 
carry out a complex aggregation or a business transaction.
![pic](https://media.geeksforgeeks.org/wp-content/uploads/20210627134636/m1.png)

### DNS
The Domain Name System (DNS) is the phonebook of the Internet. When users type domain names such as 
‘google.com’ or ‘nytimes.com’ into web browsers, DNS is responsible for finding the correct IP address for 
those sites. Browsers then use those addresses to communicate with origin servers or CDN edge servers to 
access website information. This all happens thanks to DNS servers: machines dedicated to answering DNS 
queries.

When DNS servers are compromised or otherwise fail, it can 
have a hugely negative impact on users, businesses, and the 
Internet as a whole. Like anything connected to the 
Internet, DNS servers are vulnerable to a range of attacks, 
as well as impersonation by malicious parties. DNS security 
measures like DNSSEC help prevent such attacks, keeping both 
servers and the users who rely on them secure.

Cloudflare offers a Managed DNS Service that comes with 
built-in DNS security for protecting DNS servers from 
attacks and other common sources of server failure.

---

### Reference
- [How the web works](https://www.hostitsmart.com/manage/knowledgebase/205/How-does-a-website-work.html)
- [HTTP](https://www.cloudflare.com/learning/ddos/glossary/hypertext-transfer-protocol-http/)
- [Web server](https://www.ibm.com/docs/en/cics-ts/5.1?topic=services-what-is-web-service)
- [DNS](https://www.cloudflare.com/learning/dns/what-is-a-dns-server/)

