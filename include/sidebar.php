<?php
@session_start();
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="https://play-lh.googleusercontent.com/CKVlp0wwisX8HLl03dlMbp7yzao3UWW3wxuBOtEHn0qJGGarun_XbQdjSP4o0MMYqV4=w240-h480-rw" alt="Wintsu Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>THAT MOE</b></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANDRAQEAgJEBAJDQoNDQkJDQ8ICQcKIB0iIiAdHx8kKDQsJCYxJxMfLTItMT01NzAwIys0QD9BQystOjcBCgoKDg0OGBAQFSsdGBouLS0rKy03LS4tKy0tLTc3KyswKy0rLSstKy0rLisrLS0tLSsrLSstLS0tLSs3KzctN//AABEIAMgAyAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEDBgcFBAj/xABDEAABAwIEAQgHBgQDCQAAAAABAAIDBBEFEiExQQYTIlFhccHwByMyQlKBkRRiobHR4SQzcvFTc3QVNEOCkrLC0uL/xAAaAQACAwEBAAAAAAAAAAAAAAABBAACAwUG/8QAJhEAAgIBBAEEAgMAAAAAAAAAAAECEQMEEiExQSIyUWEFgRMUcf/aAAwDAQACEQMRAD8AsqdJOuejojJJ0lYAyYokxCJBk4SSUIKyYhGFBW1UcDc0szGNF9XkC6IByE1lV8Q5e0kWkbZJj931bbLwM9JcXHDJtx7MgPRVgbkXYjzxQkLmYTympKywZUhrzb1E/qpAfFdYhWB2RWQkeClITEIkISExClIQkIgIihKkIQkKEI7JiEdkxCgACE1kRCYokYBSRWSRAdlOErJJQ3FZKydJEAKdJJQgyIBIBV/ldjj6VjYadmepqwQwNs407PiKITz8qOV7KImKIB82oJ3ZTu/VZRieMy1Ty6Wd7iSdCTlarNJydkAvK4ue7pOfucxXPm5Mm+h8CFnHUY12y70830iuNN+tSBh4BWWl5M29p30sV6Y8CAO4tr3lF6mHgr/Vn5KiA9puGns33Vr5O8up6ZzIqh3ORAtaXvuZom9/FdKPCWAWLQbcepcvH8Ca+MuY2z2C4tpmV4ZoyKSwyirNVgmZKxsjHhzJGgte3VrgnWZejXHpIJxRykmKpNo8170836Fae5q2KJ2iMoSFIUBRIRkICpHISFCAWTFFZMQoQAhMiITWRAAQkiISUBR2CmKJKyUNxgkU4CeysABOE9krKEGJABJNgwOcT8LR/ZV3DaQvkkq5W+sqTdjXamnh90fQLt4obU8lvfDWfIkDxXkqTYWGzQBbayW1MqSQ3pYpu2cqs1J/uubK7Ve6rdc+dlz3jVc1y5o6VAEps2qI96BwWsTOQnScEJN0NtUyfwx4sQys4ONU4hc2VmhY5r2kaFrgb+C1uCfno45Lfz44pOzUX8Vl+OszR2WlYOP4Om/01N/2hNp8CfkmcEBCkITEKwCIhDbzwUhQEIgBI8UJCMlCXIkAITFO53nqUZeoQKySjL0kQHcslZFZIhKmwwCeyQRWRIAQkAiKVlCHixceoPY+D5jOFzMWr4oQS+VunuAguU3Kaqc2N0bXAF8ZeSWufZt99O0KlcoiLD1QJYGgNYLlxSWZqUqHcKcI2HUcoYXOuA8cNtgmbiUbtnjXhxVPrnyXHQYMwFg0DTzZerCYS6QBwuMwFxsUXpYRW4vHPNuizPrg0a7a8DsvFJjUY3d8hZPjTAxlhGRsL33VXkhcb6jQEgblxUw4ovllc2WSdIs0WMsJA5twB9/SwC9sc7ZPZe0924VNp5Zhwvb3HNAJC7mFOJeLtcLg6AXsU17XQnJt9noxPXTsPyWn0MXN08LDvHBC0ngTlCzSdhMgHw5SeojyFdeS+IyVLZs5J5h7WBzrZibfstvoyXk7JQkoigKIaAKjcpCo3I2CgCgcjKAlSwURuQo3ILqWShkkikjuJRYyE1kZQlLmo1kk10kUATioy5E5BZBkOPygzFzWsYCZ2SMvu4ga2+arWKAP6TXaG+liHNd2q6Vuga4tvlc3X4AdPFVrFqRr3FwOV/Ei2V/eubmTUmdPBTgioTUBkPtG3yXSwvDcjhYXAuS7rKNwI90d7tRdeymqo4gQagOkIBcxtrRhU3zkqRsscU7Zz8dYXNv1EfMLjRUYcPIIXZxGqicMrpQC6/zXmpGNcDqQWuIDxpmCbaaihSVSmyGLDgOJP5LoU1PqCdm3+qOOIjd1x9CpHPAHUB+C0xRbdsxzUjmYtK9hBZ9xvxG+v6K98koS2lzFtnTvc49thbwKqGG05qJbhpJe4tbxAC0WmphDGyMH+W0N7SUy+BZCcgKlIQEIbi1ERQFSlAVLJRGWoHBSlAQhYKI8qEtUhCEhGyUR2TIyElLIWIhCQjcmWdhI7JipLISFNxCMprIyE1lXcWo8mJsvTy2vcRucLb5hr4KmPqi8EX1H1V+sDcHZwIPaFm9ZGYJ5GHeJ5aeF+r8CltRFy5Qzp5bXyBJMxp6ThvtuuHiuKt5whjG7EF4AzPSmopZ5HkSABp6NwSCV524NIH5jNHca2sdCphx44O3Lk1yZMk1SXB4X1Ts17kgEXY/iF3KbFoi0DJlJt/1LxVOFvkdd0zSTxDQCUbuTdm5vtDiW6/CLpz0NClTi+DvRyXaCDoeK8dVUXBA8hRmfm4msz3LRYuNrkocLYKiphiBvzssbXf031V4R2oxzZLdGlcnKJsFJDaJgfJEx0jwAHucdfFdByleOAFgNAOoKIhZt2WSAKAqQhCR5896ICIoSpSEJaoQjIQkKWyAohI7JiFIWpiEQERakpCElCHccmsnchKwssJCQjTWUIRlMpMnYiMJAuWkAe8dGhAJDZU30hYWcrauMG8YbHUNb70fB3y2+itFTjFJFfPiVG0jdnOsfIB3DVV+p5WQVbzTQxSOa9kj3TyDm2lo6hvx4oPhWWjy0ij4dW62B3v3leqqo3TC7JS07968OJ4e6GQyQjonUxcWnsUVPjgb7V8w33CxcHL14xpZNvpmdGgw18d3Syhxv0RuEGK1eUWBt1jrXhqsfFtAb24C+i5jnyVB6LHa+9qBZN44SauSFM2WK4iKeoc82HG2g3JVy9H+H5aqIuHSu55+6LH9FwcLw0MN3C7vwCt3J+sipZ2STSBjDmYZXaMjcRYX6hcpnbSYmu7Ze37oSFI4cdCDYgixDghIS40REJiFIWprIlSEhMQpSEJCISMtQlqmIQkIkI7ISPPUpbISEQEVkkdklCHYIQ2RSPDdzvw4rxmtF9O3ZLPguHV1kcDHSSSBrIw4ucdmAb/kqHiHpUiaDzGGvcdfW1D7N+g/VQ+lTEnR0sdOHn+Kkc59tzEOH1P4LLXFb4YKUdzMssnF0i3Yh6Qa6ozAVL42v92ny0+Ud4F/xXB/2q8k55JXZ75i97nl65wScFv8AxxRhb8nv+2fC0C/HYhXf0eUZfT1lS4XPqqdhOrh7zvBZ2HWt/da36Moy3DnBwIbUzSSNcdr6D/xSusahif2NaSN5Ec6qGveuVV0Echu6PX4h0CrjX4Rdxy2H3HXyk9hXJmw2Ru8LyOtozgfRcjFmrpnXnBSXJXG4Oz4b/wBWq9sdNbQAC3VpZdIUp/w391iF6IaBztoJD/yuK6eLUWuexDJp1fBz4YbcF6HUP2hphyFwmGUt2JXWgwWR27QwfesXH5KxYZhbIBm42F3u1c5Owe7sSyQroz2DF6vk7UfZpnOqKRwLomPPTbH908LdWyubeWVA6BszaonnL/w4B+0sd1EcFQvSzizaiohiEbh9lbIelZua9v8A1VRwmVjZem8hrxv8BRywVNopCdOmbfhXKemqswD+aLCOhUubGXjsXaABFw4EHiCC0rFMSr6cMaIYyX3b7JzNcF65KhwYOm4WGoBIaEt0rYyuejXy1CQqFyY5WPiiyzMfLG1xyS5vWsb89wr1TTsmjbIx2ZkoDmu6wrJkHIQkKQhAUQAkICEZKBxRICQkmKSgCGsrLXN731ao6J+bXhv3BcaSUuNr+zt2hdSjNm6aXtp2eQk872xN8KuRm/pOqS+ua3N/JgYOwEknxCp5K7nLebnMSqD8D2x91gB4LhBdDAqxxE8zvIxwldLz1JLUzE0LbeRjC3DaYDXNFmsdb3JPisUatz5Jtth9L/kRfkub+S5gl9j2g9zPcTfTY/BJq0p+bA3icP6TmCnc0OGoBTNJbodR262XMhBJnSbIgG/f/OynZKza5v23aCkMp1BsiyX3AKahw7M5ckgPUz5ixUNW97WEtktl4OF2o2xgbXHdsuRyvxMUtDM4HpFjms/qOg/NORyOq8is4LsxblRXGprZpC693uaCNLtGnguX57kVr+d0iujFUqORLl2djA6K1ppNtebYbnM7rXXc7OdXWHzBeosKxiOSOKB0eUsABfoAQOpQY7VNheWxvzE6g6EMSU1Kc6H4uEIWj11ta2Jl9LDZosLo8Bxuo5lzRVTMjzk82x5YA5VGWVzzdzyd+4K6YNCyeBscNPd/QHONvcO7VeeKoqKKQnubZfOQ1fLUQSc5KXiKQNjfIc0pbbXvVgcFn2K8k5qFsdTFUy9HLzzWktdC7rHYrXybxM1UBLyznIXZH5NA/qKquOC/NWdFyBx87o3KIqxUYnzxCSYplYhWGO1Gu2o7l3KTYfNU7B8WjqLWeLi2mzgrbSyARl3wNc7sK5mte2kNaXm2YzjU3OVdQ+/tzzHuF14k735nE/E5x6tUy66VJI5snbsa6ZF8/wBkyJAmrdeTGlBTf6eH62WFNHndblyTffD6b/JYPP0XP/Ie2P8Ao9ofczstKPRRD5ogVzonQY5iHBOBbj1J7pwt4lWMVm3pVxHoRwh2sjszh90LR5jYFYly7refr5LHSD1Q7xv+JKZ06csq+hXUy2439lc896E9yM7pHz2LqHJG7QSPwskTxJJJ4m5KQKc/qgQQWq+hgj7PV3A0mhIvYkaFZV57lp3oj6MM5v7crR9AP1VZq4s0xe9GjVEgc0tIaQ4FpaRcOaudhVHFTscyOJrQXuc4i93ntU0jlHS+2ddwe4rKK9IzN0z0OUTlM5QuQARuSSKSID57pap8Lw9jiC36ELT8Ex5s+HzvuA+GnnzN4tdlKysMufy7Svfhte6nbPH0gKmF0Zb28PFTU6eOVL5Rlp8zxtrwzzX89SYJk4WxULz1WTWThOgEdpW18hpM2G05+FjmnjY3KxMLYfRtKHYawcY5Zm92t/FJa9Xj/Y3o3U/0WpAiunDu0fquSjpjgoroMyYlbJ0UPFjdWIaeSQnSNjnd5WC1Mhe9zidXucTxuVpnpOxLJTshDtahxLgN+aH72WWyFdLRQ9Ln8nN1svUo/AmjzwTOCcJfunRIYJ0klCDO89q1D0Yty0t/8WSQ9+w8Fly1bkF0aOHtEp7+kVH7WGD9aLm7z2qKJ1njXf8AJSg3UB9tv9QWUOmNZO0e1yiJUr1C5UIA4pJOSRKnzsDcj5a9Slkfm3vmG54uCgKmdOCwN5ttwQecHtOCYYomMErJgjCqaIIJAJgiQLDhaj6KZ81LOzjHM13aAR/8rLVd/RZXZKqWIn/eYrjtc39iUtqo3iYxp5VkRqJTF2lkwcmJXEOsGCo55LAp3OsFXuVuK/ZaSR+bpvHNx9fOHj8t0bbaiu2B0k2+kZtyyxT7VXSODrsh9UztaP3uuAUbjqSePXrZAB54r0UIKEVFeDg5JbpOXyOmJ87orprK5QV0iUyYnz1IgEVrPJOPm6eBp35phPGzjr4rJ2C5A67DTe62LCWWyj4Gtb3aI+GGHuRZacXUczLSsHWRopaYaedlHOPXR9hSmKdtofzRpI9Tv1ULlI8+d1EVDMEpJFJWAfOhKTUkkyIokBRhJJVZtEJK6SSqWHXtwavNLUxTD/gvaXAaF7OI+hSSUpNNMsnTTN0hmbIxr2uu2VrXteNnNP8AdJz7JJLzM/S3R3Y8ogkk89SynlzjP2mo5trgY6XM0EG4kk4n8LJJLf8AFLfllKXcehbXtrGkvJWSUkkl6E4oySSShBihKSSKKs9OFRc5URN+KVn0v+y2ChFnADyUySk+ISL4feix0u30TVLOk13UT3Apkly9NJ2zqahcDuchumSTaFASUkklYB//2Q==" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="?page=category_list" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Stockrooms</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=product_list" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=add_category" class="nav-link">
                        <i class="nav-icon fa fa-plus"></i>
                        <p>Add stockroom</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=addreservation" class="nav-link">
                        <i class="nav-icon fa fa-plus"></i>
                        <p>Add reservation</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=add_product" class="nav-link">
                        <i class="nav-icon fa fa-plus"></i>
                        <p>Add Product</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=reservation-cart" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Reserved cart</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=reservations" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Reservations</p>
                    </a>
                </li>


                <li class="nav-header">Account</li>


                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon fa fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
                <li class="nav-header">Stockrooms</li>
                <?php
                $data = allCat();
                ?>
                <?php
                foreach ($data as  $value) :
                ?>
                    <li class="nav-item">
                        <a href="index.php?page=list_product_by_cat&s=<?= $value['stockroomname'] ?>" class="nav-link">

                            <i class="fa-solid fa fa-warehouse"></i>
                            <p><?= $value['stockroomname'] ?></p>
                        </a>
                    </li>

                <?php endforeach; ?>
            </ul>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>