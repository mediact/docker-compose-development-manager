import json, urllib2

# Retrieve all load balancers
response = urllib2.urlopen('http://127.0.0.1:8080/api/tcp/services')
tcpServices = json.loads(response.read())

for service in tcpServices:
    include = False
    for routerName in service['usedBy']:
        # Fetch the routers so the DNS entries can be generated
        routerResponse = urllib2.urlopen('http://127.0.0.1:8080/api/tcp/routers/' + routerName)
        tcpRouter = json.loads(routerResponse.read())
        # Check if the router uses the `mysql` entry point
        if "mysql" in tcpRouter['using']:
            # Tidy up the HostSNI rule.
            rule = tcpRouter['rule'].replace('HostSNI(`', '').replace('`)', '').replace('`, `', '`,`')
            for dnsEntry in rule.split('`,`'):
                # This is one of the required entries for HostSNI so non TLS TCP connections are send here.
                if dnsEntry != '*':
                    # Generate and print the entry for the hosts file.
                    print service['loadBalancer']['servers'][0]['address'].replace(':3306', '') + '    ' + dnsEntry
