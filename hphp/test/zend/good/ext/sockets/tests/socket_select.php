<?hh <<__EntryPoint>> function main(): void {
$sockets = vec[];
if (strtolower(substr(PHP_OS, 0, 3)) == 'win') {
    $domain = AF_INET;
} else {
    $domain = AF_UNIX;
}
socket_create_pair($domain, SOCK_STREAM, 0, inout $sockets);

$write  = null;
$except = null;
var_dump(socket_select(inout $sockets, inout $write, inout $except, 0));
}
