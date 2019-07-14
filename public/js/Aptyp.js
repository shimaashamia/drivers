
//  $scope.info_driver = {
//     products_id: '',
//     price: '',
//     quantity: '',
//     drivers_id: ''
// };
var app = angular.module("storeList", ["ngRoute"]); 
app.config(function($routeProvider) {
    $routeProvider
  
    .when("/driver", {
      templateUrl : "views/create.blade.php",
      controller: "myCtrl"
    })
});

app.controller("myCtrl", function($scope,$http) {
    // $scope.products = ["Milk", "Bread", "Cheese"];
    //alert('ddds');
//save new record / update existing record
// $scope.submitComment = function() {
//     $scope.loading = true;

//     // save the comment. pass in comment data from the form
//     // use the function we created in our service
//     Comment.save($scope.commentData)
//         .success(function(data) {

//             // if successful, we'll need to refresh the comment list
//             Comment.get()
//                 .success(function(getData) {
//                     $scope.comments = getData;
//                     $scope.loading = false;
//                 });

//         })
//         .error(function(data) {
//             console.log(data);
//         });
// };



    $scope.addItem = function () {
        $http({
            method: 'POST',
            url:'/driver',
            data:{
            products_id:$scope.products_id,
            price:$scope.price,
            quantity:$scope.quantity,
            drivers_id:$scope.drivers_id,
        },
        dataType:'json',
    }).then(function success(e){
            console.log(e);
            $scope.loadTasks();
            //alert(e.data);
            //alert('Success');
            //location.reload();
        }, function error(e) {
            console.log(e);
            alert('Error');
        });
       // $scope.addItem();
    }
   // $scope.loadTasks();
           // $scope.info_driver.push(e.info_driver);
            // URL:drive.index;
           // $("#add_new_task").modal('hide');
            // $scope.products.push($scope.products_id);
            // $scope.products.push($scope.price);
            // $scope.products.push($scope.quantity);
            // $scope.products.push($scope.drivers_id);
        // });
    // };


// today: number = Date.now();
    $scope.today = new Date();
// List tasks
    $scope.loadTasks = function () {
        $http.get('/driver')
            .then(function success(e) {
               console.log(e.data.driver_list);
            //    console.log(e.data.driver_list);
                $scope.product = e.data.product;
                $scope.driver_list = e.data.driver_list;
                $scope.info_driver = e.data.info_driver;
            });
    };
    $scope.loadTasks();


   
    $scope.updateTask = function (id) {
        $http.put('/driver/' + id, {
           // $stauts: $scope.info_driver.id
        }).then(function success(e) {
            console.log(e);
            //alert(e.data);
            $scope.loadTasks();
            alert(' تم الايقاف ');
            //location.reload();
            //$scope.$info_driver.stauts=0;

           // $scope.errors = [];
           // $("#edit_task").modal('hide');
        }, 
        );
    };
    

    // $scope.update = function (blogPost) {

    //     Api.put(blogPost.id, blogPost)
    //         .then(function (response) {
    //             console.log('response', response);
    //             $window.location.href = '#!list';
    //         }, function (error) {
    //             console.log('error', error);
    //         });

    // };
    // function updateStatus() {
    //     element.text(dateFilter(new Date(), format));
    //   }
});

