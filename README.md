After 
```
/vendor/bin/sail up -d
``` 
you need to run inside the container:

```
sail root-shell
cd .. && chown -R sail:sail html/
````

so the files inside the container have the same permissions as the files outside.

At the end host files should be `$USER:$USER` 
while

container files should be `sail:sail`
