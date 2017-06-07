/**
 * Created by yang on 01/06/2017.
 */
var app = angular.module('cliApp', []);

app.controller('cliController', ['$http', '$scope', function($http, $scope){

    $scope.output = '';
    $scope.command = 'hostname';
    $scope.phpURL = 'exe-script.php?cmd=';
    $scope.frameURL = $scope.phpURL + $scope.command;

    $scope.test = function() {
        $scope.command = 'ping -c 10 127.0.0.1';
        $scope.frameURL = $scope.phpURL + $scope.command;
    }

    $scope.laravelLog = function() {
        $scope.command = 'cat /var/www/html/dian/storage/logs/laravel.log';
        $scope.frameURL = $scope.phpURL + $scope.command;
    }

    $scope.wechatLog = function() {
        $scope.command = 'cat /var/www/html/dian/storage/logs/wechat.log';
        $scope.frameURL = $scope.phpURL + $scope.command;
    }

    $scope.runCmd = function() {
        $scope.frameURL = $scope.phpURL + $scope.command;
    }

}]);