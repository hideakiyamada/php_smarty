FROM centos:7

# update yum
RUN yum -y update
# RUN yum -y install yum-utils
# RUN yum clean all

# install remi repo
RUN yum -y install http://rpms.famillecollet.com/enterprise/remi-release-7.rpm

# install php7.3
RUN yum -y install --enablerepo=epel,remi,remi-php73 \
  php php-common \
  php-mbstring \
  php-mcrypt \
  php-devel \
  php-xml \
  php-mysqlnd \
  php-pdo \
  php-opcache --nogpgcheck \
  php-bcmath

# install other
RUN yum -y install httpd 

# application directory
# RUN mkdir /app
# WORKDIR /app

# install composer　（※smartyはサイトからダウンロードするので、composerは使わなくてもよかった）
# RUN curl -sS https://getcomposer.org/installer | php && \
#   mv composer.phar /usr/local/bin/composer

# timezone setting
RUN cp /etc/localtime /etc/localtime.org
RUN ln -sf /usr/share/zoneinfo/Asia/Tokyo /etc/localtim

# EXPOSE 8080

# このコマンドなんのためにあるのかよくわかっていない。いらないのかも。
CMD ["/sbin/init"]