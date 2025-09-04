pipeline {
  agent any
  stages {
    stage('Checkout') {
      steps {
        echo 'Code already checked out by SCM'
      }
    }
    stage('Install Dependencies') {
      steps {
        sh '''
          php -v
          composer install --no-interaction --no-progress
        '''
      }
    }
    stage('List Files') {
      steps {
        sh 'ls -la'
      }
    }
  }
}
